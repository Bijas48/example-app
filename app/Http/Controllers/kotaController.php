<?php

namespace App\Http\Controllers;

use App\Models\kota;
use Illuminate\Http\Request;

class kotaController extends Controller
{
    public function display()
    {
        return view('wisatakota', [
            "posts" => kota::all()
        ]);
    }
    public function show(kota $post)
    {
        return view('posts', [
            'posts' => $post
        ]);
    }
}
