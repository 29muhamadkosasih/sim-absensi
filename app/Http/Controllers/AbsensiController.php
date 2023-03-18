<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Rayon;
use App\Models\Report;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {

        $totalreport = Report::all()->count();
        $totaluser = User::all()->count();
        $totalrayon = Rayon::all()->count();
        $totalrombel = Rombel::all()->count();
        $hadir = Report::where('ket', 'Hadir')->count();
        $izin = Report::where('ket', 'Izin')->count();
        $sakit = Report::where('ket', 'Sakit')->count();

        //nilai persen hadir
        $a =$hadir/$totalreport;
        $p_hadir =$a*100;

        $b =$izin/$totalreport;
        $p_izin =$b*100;

        $c =$sakit/$totalreport;
        $p_sakit =$c*100;

        // $user = Auth::user();
        // $user = User::all('name');
        $user = User::get();

        $student = Absen::all();
        $data = Absen::orderBy('id', 'desc')->paginate(1);
        $t_absen =Absen::all()->count();




        return view('page.absen.index', [
            // 'user'              => $user,
            'totalreport'       => $totalreport,
            'totalrayon'        => $totalrayon,
            'totaluser'         => $totaluser,
            'totalrombel'       => $totalrombel,
            'user'              => $user,
            'p_hadir'           => $p_hadir,
            'p_izin'           => $p_izin,
            'p_sakit'           => $p_sakit,
            'hadir'             => $hadir,
            'izin'              => $izin,
            'sakit'              => $sakit,
            'student'              => $student,
            'data'              => $data,
            't_absen'              => $t_absen,
        ]);

    }
    public function index2()
    {

        $totalreport = Report::all()->count();
        $totaluser = User::all()->count();
        $totalrayon = Rayon::all()->count();
        $totalrombel = Rombel::all()->count();
        $hadir = Report::where('ket', 'Hadir')->count();
        $izin = Report::where('ket', 'Izin')->count();
        $sakit = Report::where('ket', 'Sakit')->count();

        //nilai persen hadir
        $a =$hadir/$totalreport;
        $p_hadir =$a*100;

        $b =$izin/$totalreport;
        $p_izin =$b*100;

        $c =$sakit/$totalreport;
        $p_sakit =$c*100;

        // $user = Auth::user();
        // $user = User::all('name');
        $user = User::get();

        $ldate = date('D-M-Y');
        $time = new DateTime();

        // $student =Absen::with('student')->get();
        // $posts =Absen::select('created_at')->where('id', 1)->get();

        $student = Absen::orderBy('id', 'desc')->paginate(1);


        $data  =Student::all();
        $ab =Absen::all();

        return view('page.absen.index2', [
            // 'user'              => $user,
            'totalreport'       => $totalreport,
            'totalrayon'        => $totalrayon,
            'totaluser'         => $totaluser,
            'totalrombel'       => $totalrombel,
            'user'              => $user,
            'p_hadir'           => $p_hadir,
            'p_izin'           => $p_izin,
            'p_sakit'           => $p_sakit,
            'hadir'             => $hadir,
            'izin'              => $izin,
            'sakit'              => $sakit,
            'ldate'              => $ldate,
            'time'              => $time,
            'student'              => $student,
            'data'              => $data,
            'ab'              => $ab
        ]);

    }

    public function store(Request $request)
    {

        Absen::create($request->all());
        // dd($request);
        return back()
                        ->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    public function show(Request $request)
    {
        $data  =Student::all();
        return view('page.absen.show',[
            'data'              => $data


        ]);
    }

    public function next()

    {
        return view('page.absen.index3');
    }

    public function kehadiran()
    {
        return view('dashboard.index');
    }
    public function ketidakhadiran()
    {
        return view('dashboard.index');
    }

}
