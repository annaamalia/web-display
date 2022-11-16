<?php

namespace App\Http\Controllers;

use App\Models\DataRotor;
use App\Models\DisplayRotor;
use Illuminate\Http\Request;

class DataRotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datarotor = DataRotor::all();
        $displayrotor = DisplayRotor::all()->pluck('id_gambar', 'id')->unique();
        return view('data-rotor.form', [
            'datarotor' => $datarotor,
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
            'kode'                =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $datarotor = new DataRotor;
        $datarotor->kode = $validatedData['kode'];
        $datarotor->model = $validatedData['model'];
        $datarotor->id_gambar = $validatedData['id_gambar'];

        $datarotor->save();

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
        $datarotor = DataRotor::find($request->get('id'));
        $displayrotor = DisplayRotor::all()->pluck('id_gambar')->unique();
        return view('data-rotor.edit', [
            'datarotor' => $datarotor,
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
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode'               =>'required',
            'model'               =>'required',
            'id_gambar'               =>'required',
        ]);

        $datarotor = DataRotor::find($request->get('id'));
        $datarotor->kode = $validatedData['kode'];
        $datarotor->model = $validatedData['model'];
        $datarotor->id_gambar = $validatedData['id_gambar'];

        $datarotor->save();

        return redirect(route('datarotor.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $datarotor = DataRotor::find($request->get('id'));
        $datarotor->delete();
        return redirect()->back();
    }
}
