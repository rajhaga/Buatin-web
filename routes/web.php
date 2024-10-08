<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;


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
    $posts = DB::table('posts')->get(); // Mengambil semua data dari tabel 'posts'
    return view('blog', ['posts' => $posts]); // Mengirimkan data ke view 'blog'
});

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [PostController::class, 'store']);
