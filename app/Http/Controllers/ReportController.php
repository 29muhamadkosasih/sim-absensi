<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;



class ReportController extends Controller
{
    private $page_title         = "Reporting ";

    public function index()
    {
        $user = User::get();
        $ray = Report::latest()->get();
        // $posts = Post::latest()->paginate(5);

        return view ('page.report.index',[
            'page_title'    => $this->page_title,
            'ray'              => $ray,
            'user'              => $user,


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'activity'=>['required'],

        ]);

        Report::create($request->all());
        return redirect()->route('report.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly beans pastry.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::get();
        $report = Report::find($id);
        return view('page.report.show',compact('user','report'));
    }

    /**
     * Show the form for editing the specified resource.s
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {

        $user = User::get();
        return view('page.report.edit',compact('user', 'report'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'activity'=>['required'],
        ]);
        // dd($request);

        $report->update($request->all());
        return redirect()->route('report.index')
                                 ->with('success', ' 👋 Updated data successfuly !   Jelly oat cake candy jelly beans pastry.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('report.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly beans pastry.');
    }

    public function cetak()
    {
        $report = Report::all();
        $pdf = PDF::loadview('page.report.cetak', ['report' => $report]);
        return $pdf->download('Report-Daily-Activity.pdf');
    }
}
