<?php

namespace App\Http\Controllers;

use App\Models\DataFrontHousing;
use App\Models\DisplayFrontHousing;
use Illuminate\Http\Request;

class DataFrontHousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafh = DataFrontHousing::all();
        $displayfh = DisplayFrontHousing::all()->pluck('id_gambar', 'id')->unique();
        return view('data-fh.form', [
            'datafh' => $datafh,
            'displayfh' => $displayfh,
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

        $datafh = new DataFrontHousing();
        $datafh->kode = $validatedData['kode'];
        $datafh->model = $validatedData['model'];
        $datafh->id_gambar = $validatedData['id_gambar'];

        $datafh->save();

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
        $datafh = DataFrontHousing::find($request->get('id'));
        $displayfh = DisplayFrontHousing::all()->pluck('id_gambar')->unique();
        return view('data-fh.edit', [
            'datafh' => $datafh,
            'displayfh' => $displayfh,
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
    public function update(Request $request, DataFrontHousing $datafh)
    {
        $validatedData = $request->validate([
            'kode'               =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $datafh = DataFrontHousing::find($request->get('id'));
        $datafh->kode = $validatedData['kode'];
        $datafh->model = $validatedData['model'];
        $datafh->id_gambar = $validatedData['id_gambar'];

        $datafh->save();

        return redirect(route('datafh.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $datafh = DataFrontHousing::find($request->get('id'));
        $datafh->delete();
        return redirect()->back();
    }
}
