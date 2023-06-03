<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataKota;
use App\Models\WisataAlam;

class HomeController extends Controller
{
    public function display()
    {

        return view('wisata-kota', [
            'posts' => WisataAlam::all()
        ]);
    }
}
