<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\User;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        $ray = Rayon::all();
        return view('page.rayon.index', [
            'user'              => $user,
            'ray'              => $ray

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
            'rayon'=>['required'],
            'pembimbing'=>['required'],

        ]);

        Rayon::create($request->all());
        return redirect()->route('rayon.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(Rayon $rayon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $edit = Rayon::find($id);
        $ray = Rayon::all();

        return view('page.rayon.index',compact('edit', 'ray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request,$id)
    {
        $input  = $request->all();

        $Rayon   = Rayon::find($id);
        // dd($id);
        $Rayon->update($input);

        return redirect()->route('rayon.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Rayon::find($id);
        $delete->delete();
        return redirect()->route('rayon.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }
}
