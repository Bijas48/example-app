<?php

namespace App\Http\Controllers;

use App\Models\alam;
use App\Models\kota;
use Illuminate\Http\Request;

class tourController extends Controller
{
    public function display()
    {

        return view('post', [
            'postsalam' => alam::all(),
            'postskota' => kota::all(),
        ]);
    }
}
