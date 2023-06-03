<?php

use App\Http\Controllers\alamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kotaController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\tourController;
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

// Route::get('/', function () {
//     return view('home1');
// });
Route::get('/', [HomeController::class, 'display']);

// Route::get('/', [HomeController::class, 'index']);
Route::get('/wisata-kota', [kotaController::class, 'display']);
Route::get('/wisata-kota/{post:slug}', [kotaController::class, 'show']);

Route::get('/wisata-alam', [alamController::class, 'display']);
Route::get('/wisata-alam/{post:slug}', [alamController::class, 'show']);

Route::get('/layanan', [layananController::class, 'display']);

Route::get('/tour', [tourController::class, 'display']);

Route::get('/tour/search', [tourController::class, 'search']);

// Route::get('/wisata-alam', function () {
//     return view('wisataalam');
// });

Route::get('/test', function () {
    return view('home2');
});

Route::get('/testing', function () {
    return view('test');
});

Route::get('/posts', function () {
    return view('posts');
});

// Route::get('/tour', function () {
//     return view('post');
// });

// Route::get('/layanan', function () {
//     return view('layanan');
// });

// Route::get('/wisatakota', function () {
//     return view('wisatakota', [
//         "test" => 'Masuk apa ngk'
//     ]);
// });

// Route::get('/wisatakota', [kotaController::class, 'display']);
