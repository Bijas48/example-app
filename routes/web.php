<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kotaController;
use App\Http\Controllers\WisataKotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home1');
});

// Route::get('/', [HomeController::class, 'index']);
Route::get('/wisata-kota', [kotaController::class, 'display']);
Route::get('/wisata-kota/{post:slug}', [kotaController::class, 'show']);

Route::get('/test', function () {
    return view('home2');
});

Route::get('/testing', function () {
    return view('test');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/layanan', function () {
    return view('postlayanan');
});

// Route::get('/wisatakota', function () {
//     return view('wisatakota', [
//         "test" => 'Masuk apa ngk'
//     ]);
// });

// Route::get('/wisatakota', [kotaController::class, 'display']);

Route::get('/wisata-alam', function () {
    return view('wisata-alam');
});
