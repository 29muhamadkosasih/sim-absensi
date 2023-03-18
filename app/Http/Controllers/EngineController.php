<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EngineController extends Controller
{

    public function importText()
    {
        //proses get file
        $fp = fopen(storage_path('app/text/RFUN.INC.RMT_20220301_151125.txt' ), 'r') or die("can't open file");

         while(!feof($fp)) {



             $content = fgets($fp);

             $result = explode ('|', $content );
             if(isset($result[1])){

                $result = [
                    'MTFormat'              => $result[0],
                    'RefferenceNumber'      => $result[1],
                    'Status'                => $result[2],
                    'Header'                => $result[3],
                    'BANKSENDER1'           => $result[4],
                    'BANKSENDER2'           => $result[5],
                    'BANKSENDER3'           => $result[6],
                    'BANKRECEIVER1'         => $result[7],
                    'BANKRECEIVER2'         => $result[8],
                    'BANKRECEIVER3'         => $result[9],
                    'TAG20A'                => $result[10],
                    'TAG20B'                => $result[11],
                    'TAG21A'                => $result[12],
                    'TAG21B'                => $result[13],
                    'TAG32A'                => $result[14],
                    'TAG32B'                => $result[15],
                    'TAG32C'                => $result[16],
                    'TAG32D'                => $result[17],
                    'TAG58A'                => $result[18],
                    'TAG58B'                => $result[19],
                    'TAG58C'                => $result[20],
                    'TAG58D'                => $result[21],
                    'TAG58E'                => $result[22],
                    'TAG72A'                => $result[23],
                    'TAG72B'                => $result[24],
                    'TAG72C'                => $result[25],
                    'TAG72D'                => $result[26],
                    'TAG72E'                => $result[27],
                    'TAG72F'                => $result[28],
                    'SIGN1'                 => $result[29],
                    'SIGN2'                 => $result[30],

                ];

                $save = File::create($result);

                dd($save);

        }

        }

    }


    public function createfile()

    {

        $data = File::get([
            'TAG20A',
            'TAG20B',
            'TAG21A',
            'TAG21B',
            'TAG32A',
            'TAG32B',
            'TAG32C',
            'TAG32D',
            'TAG58A',
            'TAG58B',
            'TAG58C',
            'TAG58D',
            'TAG58E',
            'TAG72A',
            'TAG72B',
            'TAG72C',
            'TAG72D',
            'TAG72E',
            'TAG72F'
        ]);

        $content = '';

        foreach ($data as $key => $value) {
            # code...

            $content .= str_pad(':20:',20, "$value->TAG20B");
            $content .= "\n";
            $content .= str_pad(':21:', 20, "$value->TAG21B");
            $content .= "\n";
            $content .= str_pad(':32A:', 24, "$value->TAG32B");
            $content .= "\n" ;
            $content .= str_pad('', 15, "$value->TAG32C");
            $content .= "\n" ;
            $content .= str_pad('', 19, "$value->TAG32D");
            $content .= "\n" ;
            $content .= str_pad(':58A:', 16, "$value->TAG58B");
            $content .= "\n" ;
            $content .= str_pad('', 16, "$value->TAG58C");
            $content .= "\n" ;
            $content .= str_pad('', 23, "$value->TAG58D");
            $content .= "\n" ;
            $content .= str_pad(':72A:', 40, "$value->TAG72B");
            $content .= "\n" ;
            $content .= str_pad('', 16, "$value->TAG72C");
            $content .= "\n" ;
            $content .= str_pad('', 21, "$value->TAG72D");
            $content .= "\n" ;
            $content .= str_pad('', 30, "$value->TAG72E");
            $content .= "\n" ;
            $content .= str_pad('', 7, "$value->TAG72F");

        }
        $date =date('Y-m-d-H-i-s');

        $filename = 'MT202'. '-' .  $date;

        Storage::disk('local')->put($filename.'.txt' , $content);
        dd($content);

        // Storage::disk('local')->put('/FileText202.txt', $content);
        // Storage::path('/app/text/fileText202.text', $content);

        // $fp = fopen('app/text/202.txt', 'w');

        // $save= fwrite($fp, "ini text 202");

    }


}
