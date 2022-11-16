<?php

namespace App\Http\Controllers;

use App\Models\DataFrontHousing;
use App\Models\DisplayFrontHousing;
use Illuminate\Http\Request;

class FormFrontHousingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displayfh = DisplayFrontHousing::all();
        return view('display-fh.form', [
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
            'id_gambar'               =>'required',
            'gambar'              =>'image|file|max:4096',
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }

        $displayfh = new DisplayFrontHousing();
        $displayfh->id_gambar = $validatedData['id_gambar'];
        $displayfh->gambar = $validatedData['gambar'];

        $displayfh->save();

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
        $displayfh = DisplayFrontHousing::find($request->get('id'));
        return view('display-fh.edit', [
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
    public function update(Request $request, DisplayFrontHousing $displayfh)
    {
        $validatedData = $request->validate([
            'id_gambar'               =>'required',
            'gambar'               =>'image|file|max:4096',

        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images'); 
        }

        $displayfh = DisplayFrontHousing::find($request->get('id'));
        $displayfh->id_gambar = $validatedData['id_gambar'];
        $displayfh->gambar = $validatedData['gambar'];

        $displayfh->save();

        return redirect(route('formfh.store'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $displayfh = DisplayFrontHousing::find($request->get('id'));
        $displayfh->delete();
        return redirect()->back();
    }
}
