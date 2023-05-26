<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model BukuModel
use App\Models\AnggotaModel;

class AnggotaController extends Controller
{
    //method untuk tampil data anggota
    public function anggotatampil()
    {
        $dataanggota = AnggotaModel::orderby('id_anggota', 'ASC')
        ->paginate(5);

        return view('halaman/view_anggota',['anggota'=>$dataanggota]);
    }

    // untuk tambah data anggota
    public function anggotatambah(Request $request)
    {
        $this->validate($request, [
            'nomor_anggota' => 'required',
            'nama_anggota' => 'required',
            'status' => 'required',
            'hp' => 'required',
        ]);

        AnggotaModel::create([
            'nomor_anggota' => $request->nomor_anggota,
            'nama_anggota' => $request->nama_anggota,
            'status' => $request->status,
            'hp' => $request->hp,
        ]);

        return redirect('/anggota');
    }

     //method untuk hapus data anggota
     public function anggotahapus($id_anggota)
     {
         $dataanggota=AnggotaModel::find($id_anggota);
         $dataanggota->delete();
 
         return redirect()->back();
     }

     //method untuk edit data anggota
    public function anggotaedit($id_anggota, Request $request)
    {
        $this->validate($request, [
            'nomor_anggota' => 'required',
            'nama_anggota' => 'required',
            'status' => 'required',
            'hp' => 'required'
        ]);

        $id_anggota = AnggotaModel::find($id_anggota);
        $id_anggota->nomor_anggota   = $request->nomor_anggota ;
        $id_anggota->nama_anggota      = $request->nama_anggota;
        $id_anggota->status  = $request->status;
        $id_anggota->hp   = $request->hp;

        $id_anggota->save();

        return redirect()->back();
    }
}