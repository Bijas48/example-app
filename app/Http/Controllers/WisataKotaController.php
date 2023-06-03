<?php

namespace App\Http\Controllers;

use App\Models\WisataKota;
use Illuminate\Http\Request;

class WisataKotaController extends Controller
{
    // public function display()
    // {
    //     return view('wisata-kota', [
    //         'posts' => WisataKota::all()
    //     ]);
    // }
    public function display()
    {
        return view('wisata-kota', [
            'slug' => 'slug',
            'nama' => 'nama',
        ]);
    }

    public function show(WisataKota $post)
    {
        return view('posts', [
            'posts' => $post
        ]);
    }
}
// ini ngk bisa ntah ngk tau knp
