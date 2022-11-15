<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Display;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        $display = Display::all()->pluck('id_gambar', 'id')->unique();
        return view('data.form', [
            'data' => $data,
            'display' => $display,
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
            'kode'                =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $data = new Data;
        $data->kode = $validatedData['kode'];
        $data->model = $validatedData['model'];
        $data->id_gambar = $validatedData['id_gambar'];

        $data->save();

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
        $data = Data::find($request->get('id'));
        $display = Display::all()->pluck('id_gambar')->unique();
        return view('data.edit', [
            'data' => $data,
            'display' => $display,
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
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        $validatedData = $request->validate([
            'kode'               =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $data = Data::find($request->get('id'));
        $data->kode = $validatedData['kode'];
        $data->model = $validatedData['model'];
        $data->id_gambar = $validatedData['id_gambar'];

        $data->save();

        return redirect(route('data.store'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Data::find($request->get('id'));
        $data->delete();
        return redirect()->back();
    }
}
