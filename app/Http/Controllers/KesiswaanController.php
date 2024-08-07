<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use App\Models\News;

class KesiswaanController extends Controller
{
    public function prestasi()
    {
        $prestasi = Prestasi::all();

        return view('kesiswaan.prestasi', compact('prestasi'));

    }

    public function ekstra()
    {
        return view('kesiswaan.ekstra');

    }

    
}
