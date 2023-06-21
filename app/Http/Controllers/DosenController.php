<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function getDosen(Dosen $dosen)
    {
        $dataDosen = $dosen->paginate(10);

        return view('dosen.viewDosen', compact('dataDosen'));
    }
}
