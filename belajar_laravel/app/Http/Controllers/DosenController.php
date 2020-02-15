<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Fahrie Dwiki Ramadhan";

        $pelajaran = ["Algoritma","Kalkulus","Web"];

        return view('biodata', ['nama'=>$nama], ['matkul'=>$pelajaran]);
    }
}
