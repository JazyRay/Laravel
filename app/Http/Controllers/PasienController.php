<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $data = Pasien::all();
           
        return view('pasien', compact('data'));
    }

    public function tambahpasien(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Pasien::create($request->all()); 
        return redirect()->route('pasien')->with('sukses', 'Data Berhasil Ditambahkan');
    }
}
