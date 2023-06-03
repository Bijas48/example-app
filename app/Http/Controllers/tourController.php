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
    // finder
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $query = $request->input('search');
            $resultsAlam = alam::where('slug', 'like', '%' . $query . '%')->get();
            $resultsKota = kota::where('slug', 'like', '%' . $query . '%')->get();
        } else {
            $resultsAlam = alam::all();
            $resultsKota = kota::all();
        }


        return view('post', [
            'postsalam' => $resultsAlam,
            'postskota' => $resultsKota,
        ]);
    }
}
