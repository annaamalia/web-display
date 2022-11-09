<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DisplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('display_final_cam')
        ->join('data', 'display_final_cam.webdisplay_webdisplay_final_cam_CODE_VALUE', '=', 'data.kode')
        ->join('displays', 'data.id_gambar', '=', 'displays.id_gambar')
        ->select('display_final_cam.*', 'data.id_gambar', 'displays.id_gambar', 'displays.gambar', 'data.model')
        ->first();
        return view('display.index', [
                'data' => $data,
            ]);
    }

}