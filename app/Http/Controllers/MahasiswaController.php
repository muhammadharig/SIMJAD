<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function getMahasiswa(Mahasiswa $mahasiswa)
    {
        //return $mahasiswa::get();
        $dataMahasiswa = $mahasiswa->paginate(10);

        return view('mahasiswa.viewMahasiswa', compact('dataMahasiswa'));
    }
}
