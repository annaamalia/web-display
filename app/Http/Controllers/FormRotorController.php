<?php

namespace App\Http\Controllers;

use App\Models\DataRotor;
use App\Models\DisplayRotor;
use Illuminate\Http\Request;

class FormRotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displayrotor = DisplayRotor::all();
        return view('display-rotor.form', [
            'displayrotor' => $displayrotor,
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

        $displayrotor = new DisplayRotor;
        $displayrotor->id_gambar = $validatedData['id_gambar'];
        $displayrotor->gambar = $validatedData['gambar'];

        $displayrotor->save();

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
        $displayrotor = DisplayRotor::find($request->get('id'));
        return view('display-rotor.edit', [
            'displayrotor' => $displayrotor,
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
    public function update(Request $request, DisplayRotor $displayrotor)
    {
        $validatedData = $request->validate([
            'id_gambar'               =>'required',
            'gambar'               =>'image|file|max:4096',

        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }
        // dd($request);
        $displayrotor = DisplayRotor::find($request->get('id'));
        $displayrotor->id_gambar = $validatedData['id_gambar'];
        $displayrotor->gambar = $validatedData['gambar'];

        $displayrotor->save();

        return redirect(route('formrotor.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $displayrotor = DisplayRotor::find($request->get('id'));
        $displayrotor->delete();
        return redirect()->back();
    }
}
