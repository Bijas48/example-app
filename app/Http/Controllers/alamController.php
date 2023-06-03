<?php

namespace App\Http\Controllers;

use App\Models\alam;
use Illuminate\Http\Request;

class alamController extends Controller
{
    public function display()
    {
        return view('wisataalam', [
            "posts" => alam::all()
        ]);
    }

    public function show(alam $post)
    {
        return view('posts', [
            'posts' => $post
        ]);
    }
}
