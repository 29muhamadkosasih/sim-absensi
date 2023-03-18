<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $page_title    = "Dashboard ";

    public function index()
    {

        // $dataterakhir =Report::orderBy('id, desc')->paginate(1);
        $student = Absen::orderBy('id', 'desc')->paginate(1);
        $totalreport =Report::all()->count();
        $hadir =Report::where('ket', 'Hadir')->count();
        $artikels = Auth::user()->name;


        return view('dashboard.index', [
            'page_title'    => $this->page_title,
            'student'    => $student,
            'totalreport'    => $totalreport,
            'hadir'    => $hadir,
            'artikels'    => $artikels,


        ]);
    }
}
