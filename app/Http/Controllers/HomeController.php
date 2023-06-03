<?php

namespace App\Http\Controllers;

use App\Models\alam;
use App\Models\kota;
use App\Models\layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function display()
    {

        return view('home1', [
            'postslayanan' => layanan::all(),
            'postsalam' => alam::all()->shuffle(),
            'postskota' => kota::all()->shuffle(),
        ]);
    }
}
