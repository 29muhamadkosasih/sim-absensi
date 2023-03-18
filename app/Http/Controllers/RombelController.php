<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use App\Models\User;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        $rom = Rombel::all();
        return view('page.rombel.index', [
            'user'              => $user,
            'rom'              => $rom

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
            'rombel'=>['required'],

        ]);

        Rombel::create($request->all());
        return redirect()->route('rombel.index')->with('success','👋 Added data successfuly !   Jelly oat cake candy jelly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Rombel::find($id);
        $rom = Rombel::get();
        return view('page.rombel.index',compact('edit', 'rom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $input  = $request->all();

        $rombel   = Rombel::find($id);
        // dd($id);
        $rombel->update($input);

        return redirect()->route('rombel.index')
                             ->with('success','👋 Update data successfuly !   Jelly oat cake candy jelly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Rombel::find($id);
        $delete->delete();
        return redirect()->route('rombel.index')
                            ->with('success','👋 Delete data successfuly !   Jelly oat cake candy jelly');
    }

}
