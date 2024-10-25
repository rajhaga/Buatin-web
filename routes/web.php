<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\OrderController;




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
//     $posts = DB::table('posts')->get(); // Mengambil semua data dari tabel 'posts'
//     return view('blog', ['posts' => $posts]); // Mengirimkan data ke view 'blog'
// });


// Route::get('/upload', function () {
//     return view('upload');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
},[App\Http\Controllers\Authentication::class, 'login'])->name('login');

Route::post('/login', [App\Http\Controllers\Authentication::class, 'login']);
Route::get('register', [App\Http\Controllers\Authentication::class, 'showRegisterForm'])->name('register');
Route::post('register', [App\Http\Controllers\Authentication::class, 'register']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
    Route::post('/admin/users/{user}/role', [AdminController::class, 'updateRole'])->name('admin.users.updateRole');
    Route::delete('/admin/users/{user}', [AdminController::class, 'delete'])->name('admin.users.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/accounts', [AdminController::class, 'index'])->name('admin.accounts.index');  // Display all accounts
    Route::get('/admin/accounts/create', [AdminController::class, 'create'])->name('admin.accounts.create');  // Form to create new account
    Route::post('/admin/accounts', [AdminController::class, 'store'])->name('admin.accounts.store');  // Store a new account
    Route::get('/admin/accounts/{id}/edit', [AdminController::class, 'edit'])->name('admin.accounts.edit');  // Edit an account
    Route::put('/admin/accounts/{id}', [AdminController::class, 'update'])->name('admin.accounts.update');  // Update an account
    Route::delete('/admin/accounts/{id}', [AdminController::class, 'destroy'])->name('admin.accounts.destroy');  // Delete an account
});
Route::get('/profile', [AdminController::class, 'profile'])->name('profile')->middleware('auth');


Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
Route::get('/packages/order/{id}', [PackageController::class, 'order'])->name('packages.order');
Route::post('/packages/order/send', [PackageController::class, 'sendWhatsApp'])->name('packages.sendWhatsApp');

// Add this route
// In your routes/web.php
Route::post('/packages/order', [PackageController::class, 'storeOrder'])
    ->name('packages.storeOrder')
    ->middleware('auth'); // Ensure this middleware is applied

Route::get('/packages/order', [PackageController::class, 'createOrderForm'])->name('packages.orderForm');

Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::put('/order/update-status/{id}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
Route::post('/order/upload-proof/{id}', [OrderController::class, 'uploadProof'])->name('order.uploadProof');
Route::get('/form/{id}', [OrderController::class, 'showForm'])->name('form');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('accounts.profile');
});
