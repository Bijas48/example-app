<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class layananController extends Controller
{
    public function display()
    {
        return view('layanan', [
            "posts" => layanan::all()
        ]);
    }
}
