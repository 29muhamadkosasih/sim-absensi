<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Rombel;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rom =Rombel::get();
        $rayon =Rayon::get();
        $user = User::get();
        $ray = Student::all();

        return view ('page.student.index',[
            'ray'              => $ray,
            'user'              => $user,
            'rom'              => $rom,
            'rayon'              => $rayon

        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rom =Rombel::get();
        $ray =Rayon::get();
        $user = User::get();
        return view ('page.student.create',[
            'user'              => $user,
            'rom'              => $rom,
            'ray'              => $ray

        ]);

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
            'nis'=>['required'],
            'nama'=>['required'],
            'rombel'=>['required'],
            'rayon'=>['required'],

        ]);
// dd($request);
        Student::create($request->all());
        return redirect()->route('student.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Student::find($id);
        $delete->delete();
        return redirect()->route('student.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
