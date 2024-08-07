<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Prestasi;

class NewsController extends Controller
{
    public function kabar()
    {
        $news = News::all();
        $prestasi = Prestasi::all();

        return view('welcome', compact('news', 'prestasi'));

    }

    public function artikel()
    {
        $news = News::all();
        return view('kesiswaan.artikel', compact('news'));
        
    }

    
}
