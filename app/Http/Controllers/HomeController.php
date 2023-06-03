<?php

namespace App\Http\Controllers;

use App\Models\alam;
use App\Models\kota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function display()
    {

        return view('home1', [
            'postsalam' => alam::all(),
            'postkota' => kota::all(),
        ]);
    }
}
