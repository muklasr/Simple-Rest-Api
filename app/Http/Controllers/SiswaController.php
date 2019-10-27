<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index(){
        return siswa::all();
    }

    public function create(request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return 200;
    }

    public function update(request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return 200;
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return 200;
    }
}
