<?php

namespace App\Http\Controllers;

use App\Models\DisplayRear;
use Illuminate\Http\Request;

class FormRearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displayrear = DisplayRear::all();
        return view('display-rear.form', [
            'displayrear' => $displayrear,
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
        $validatedData = $request->validate([
            'id_gambar'               =>'required',
            'gambar'              =>'image|file|max:4096',
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }

        $displayrear = new DisplayRear();
        $displayrear->id_gambar = $validatedData['id_gambar'];
        $displayrear->gambar = $validatedData['gambar'];

        $displayrear->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $displayrear = DisplayRear::find($request->get('id'));
        return view('display-rear.edit', [
            'displayrear' => $displayrear,
        ]);
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
    public function update(Request $request, DisplayRear $displayrear)
    {
        $validatedData = $request->validate([
            'id_gambar'               =>'required',
            'gambar'               =>'image|file|max:4096',

        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }

        $displayrear = DisplayRear::find($request->get('id'));
        $displayrear->id_gambar = $validatedData['id_gambar'];
        $displayrear->gambar = $validatedData['gambar'];

        $displayrear->save();

        return redirect(route('formrear.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $displayrear = DisplayRear::find($request->get('id'));
        $displayrear->delete();
        return redirect()->back();
    }
}
