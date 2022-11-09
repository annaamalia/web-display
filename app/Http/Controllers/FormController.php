<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Display;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $display = Display::all();
        $data = Data::all()->pluck('id_gambar', 'id')->unique();
        $model = Data::all()->pluck('model', 'id')->unique();
        return view('display.form', [
            'display' => $display,
            'data' => $data,
            'model' => $model,
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
            // 'namamesin'          =>'required',
            'model'               =>'required',
            'tipe'               =>'required',
            'gambar'              =>'image|file|max:4096',
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }

        $display = new Display;
        $display->id_gambar = $validatedData['id_gambar'];
        // $display->namamesin = $validatedData['namamesin'];
        $display->model = $validatedData['model'];
        $display->tipe = $validatedData['tipe'];
        $display->gambar = $validatedData['gambar'];

        $display->save();

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
        $display = Display::find($request->get('id'));
        $data = Data::all()->pluck('id_gambar', 'id')->unique();
        $model = Data::all()->pluck('model', 'id')->unique();
        return view('display.edit', [
            'display' => $display,
            'data' => $data,
            'model' => $model,
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
     * @param  \App\Models\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Display $display)
    {
        $validatedData = $request->validate([
            'id_gambar'               =>'required',
            // 'namamesin'               =>'required',
            'model'               =>'required',
            'tipe'               =>'required',
            'gambar'               =>'image|file|max:4096',

        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }

        $display = Display::find($request->get('id'));
        $display->id_gambar = $validatedData['id_gambar'];
        // $display->namamesin = $validatedData['namamesin'];
        $display->model = $validatedData['model'];
        $display->tipe = $validatedData['tipe'];
        $display->gambar = $validatedData['gambar'];

        $display->save();

        return redirect(route('form.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Display  $display
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $display = Display::find($request->get('id'));
        $display->delete();
        return redirect()->back();
    }

}