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
        return view('dashboard');
    }

    public function ccd()
    {
        $data = DB::table('display_final_cam')
        ->join('data', 'display_final_cam.webdisplay_webdisplay_final_cam_CODE_VALUE', '=', 'data.kode')
        ->join('displays', 'data.id_gambar', '=', 'displays.id_gambar')
        ->select('display_final_cam.*', 'data.id_gambar', 'displays.id_gambar', 'displays.gambar', 'data.model')
        ->orderBy('id', 'DESC')
        ->first();
        return view('display.index', [
                'data' => $data,
            ]);
    }

    public function ganti()
    {
        $data = DB::table('display_final_cam')
        ->join('data', 'display_final_cam.webdisplay_webdisplay_final_cam_CODE_VALUE', '=', 'data.kode')
        ->join('displays', 'data.id_gambar', '=', 'displays.id_gambar')
        ->select('display_final_cam.*', 'data.id_gambar', 'displays.id_gambar', 'displays.gambar', 'data.model')
        ->orderBy('id', 'DESC')
        ->first();
        return view('display.ganti', [
                'data' => $data,
            ]);
    }

    public function rotor()
    {
        $datarotor = DB::table('display_rotor')
        ->join('data_rotors', 'display_rotor.webdisplay_webdisplay_rotor_CODE_VALUE', '=', 'data_rotors.kode')
        ->join('display_rotors', 'data_rotors.id_gambar', '=', 'display_rotors.id_gambar')
        ->select('display_rotor.*', 'data_rotors.id_gambar', 'display_rotors.id_gambar', 'display_rotors.gambar', 'data_rotors.model')
        ->orderBy('id', 'DESC')
        ->first();
        return view('display-rotor.index', [
                'datarotor' => $datarotor,
            ]);
    }

    public function ganti_rotor()
    {
        $datarotor = DB::table('display_rotor')
        ->join('data_rotors', 'display_rotor.webdisplay_webdisplay_rotor_CODE_VALUE', '=', 'data_rotors.kode')
        ->join('display_rotors', 'data_rotors.id_gambar', '=', 'display_rotors.id_gambar')
        ->select('display_rotor.*', 'data_rotors.id_gambar', 'display_rotors.id_gambar', 'display_rotors.gambar', 'data_rotors.model')
        ->orderBy('id', 'DESC')
        ->first();
        return view('display-rotor.ganti', [
                'datarotor' => $datarotor,
            ]);
    }

    public function front_housing()
    {
        $datafh = DB::table('display_front_housing')
        ->join('data_front_housings', 'display_front_housing.webdisplay_webdisplay_front_housing_CODE_VALUE', '=', 'data_front_housings.kode')
        ->join('display_front_housings', 'data_front_housings.id_gambar', '=', 'display_front_housings.id_gambar')
        ->select('display_front_housing.*', 'data_front_housings.id_gambar', 'display_front_housings.id_gambar', 'display_front_housings.gambar', 'data_front_housings.model')
        ->orderBy('id', 'DESC')
        ->first();
        return view('display-fh.index', [
                'datafh' => $datafh,
            ]);
    }

    public function ganti_fh()
    {
        $datafh = DB::table('display_front_housing')
        ->join('data_front_housings', 'display_front_housing.webdisplay_webdisplay_front_housing_CODE_VALUE', '=', 'data_front_housings.kode')
        ->join('display_front_housings', 'data_front_housings.id_gambar', '=', 'display_front_housings.id_gambar')
        ->select('display_front_housing.*', 'data_front_housings.id_gambar', 'display_front_housings.id_gambar', 'display_front_housings.gambar', 'data_front_housings.model')
        ->orderBy('id', 'DESC')
        ->first();
        return view('display-fh.ganti', [
                'datafh' => $datafh,
            ]);
    }
}