<?php

namespace App\Http\Controllers;

use App\Models\DataRear;
use App\Models\DisplayRear;
use Illuminate\Http\Request;

class DataRearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datarear = DataRear::all();
        $displayrear = DisplayRear::all()->pluck('id_gambar', 'id')->unique();
        return view('data-rear.form', [
            'datarear' => $datarear,
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
            'kode'                =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $datarear = new DataRear();
        $datarear->kode = $validatedData['kode'];
        $datarear->model = $validatedData['model'];
        $datarear->id_gambar = $validatedData['id_gambar'];

        $datarear->save();

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
        $datarear = DataRear::find($request->get('id'));
        $displayrear = DisplayRear::all()->pluck('id_gambar')->unique();
        return view('data-rear.edit', [
            'datarear' => $datarear,
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
    public function update(Request $request, DataRear $datarear)
    {
        $validatedData = $request->validate([
            'kode'               =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $datarear = DataRear::find($request->get('id'));
        $datarear->kode = $validatedData['kode'];
        $datarear->model = $validatedData['model'];
        $datarear->id_gambar = $validatedData['id_gambar'];

        $datarear->save();

        return redirect(route('datarear.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $datarear = DataRear::find($request->get('id'));
        $datarear->delete();
        return redirect()->back();
    }
}
