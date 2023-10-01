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

    public function showdata($id){
        $data = Pasien::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pasien::find($id);
        $data->update($request->all());
        return redirect()->route('pasien')->with('sukses', 'Data Berhasil Diubah');
    }

    public function deletedata($id){
        $data = Pasien::find($id);
        //dd($data);
        $data->delete();
        return redirect()->route('pasien')->with('sukses', 'Data Berhasil Dihapus');
    }
}