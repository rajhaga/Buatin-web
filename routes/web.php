<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\{
    PortfolioController,
    Authentication,
    AdminController,
    PackageController,
    OrderController,
    ProfileController,
    ContactController

};
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and are assigned
| to the "web" middleware group.
|--------------------------------------------------------------------------
*/

// Public Routes
Route::get('/', [PortfolioController::class, 'frontEndIndex'])->name('home');
// Route::get('/about', fn() => view('about'))->name('about');
Route::get('/about', [PackageController::class, 'pricing'])->name('about');
Route::get('/p', [PackageController::class, 'portpricing'])->name('port');
Route::get('/p', [PortfolioController::class, 'frontEndIport'])->name('port');

Route::get('/testimoni', [PackageController::class, 'pricingprop'])->name('port');

Route::get('/testimoni', fn() => view('testimoni'))->name('testimoni');
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [Authentication::class, 'login']);
Route::get('/register', [Authentication::class, 'showRegisterForm'])->name('register');
Route::post('/register', [Authentication::class, 'register']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/')->with('message', 'You have been logged out.');
})->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/order-form/{id}', [OrderController::class, 'showForm'])->name('orders.form');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/user/orders', [OrderController::class, 'userOrders'])->name('user.orders');
    Route::post('/orders/{id}/upload-proof', [OrderController::class, 'uploadProof'])->name('orders.uploadProof');
    
    // User Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/profile/orders', [OrderController::class, 'userOrders'])->name('user.orders');
    Route::get('/booked-list', [OrderController::class, 'userOrders'])->name('booked.list');
    
    // Packages
    Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
    Route::get('/packages/order/{id}', [PackageController::class, 'order'])->name('packages.order');
    Route::get('/packages/order', [PackageController::class, 'createOrderForm'])->name('packages.orderForm');
    Route::post('/packages/order/send', [PackageController::class, 'sendWhatsApp'])->name('packages.sendWhatsApp');
    Route::post('/packages/order', [PackageController::class, 'storeOrder'])->name('packages.storeOrder');
});

// Admin Routes (Require Auth and Admin Middleware)
Route::middleware('auth')->group(function () {
    // Admin Account Management
    Route::get('/admin/accounts', [AdminController::class, 'index'])->name('admin.accounts.index');
    Route::get('/admin/accounts/admin_order', [OrderController::class, 'index'])->name('admin.accounts.admin_order');
    Route::get('/admin/accounts/create', [AdminController::class, 'create'])->name('admin.accounts.create');
    Route::post('/admin/accounts', [AdminController::class, 'store'])->name('admin.accounts.store');
    Route::get('/admin/accounts/{id}/edit', [AdminController::class, 'edit'])->name('admin.accounts.edit');
    Route::put('/admin/accounts/{id}', [AdminController::class, 'update'])->name('admin.accounts.update');
    Route::delete('/admin/accounts/{id}', [AdminController::class, 'destroy'])->name('admin.accounts.destroy');
    
    // Admin Order Management
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::put('/admin/orders/{id}/update-status/{status}', [OrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
    Route::delete('/admin/orders/bulk-action', [AdminController::class, 'bulkAction'])->name('admin.orders.bulkAction');
    Route::delete('/admin/orders/bulk-delete', [OrderController::class, 'bulkDelete'])->name('admin.orders.bulkDelete');
    
    // Admin Profile
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
});

// Additional Routes for Orders without Prefixes
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::put('/order/update-status/{id}', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
Route::post('/order/upload-proof/{id}', [OrderController::class, 'uploadProof'])->name('order.uploadProof');
Route::get('/form/{id}', [OrderController::class, 'showForm'])->name('form');



Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/portfolio/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::delete('/portfolio/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');


Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

// Route for CRUD operations for packages
Route::prefix('admin/packages')->name('admin.packages.')->middleware('auth')->group(function () {
    Route::get('/', [PackageController::class, 'adminpackages'])->name('index'); // Read
    Route::get('/create', [PackageController::class, 'create'])->name('create'); // Show create form
    Route::post('/', [PackageController::class, 'store'])->name('store'); // Create
    Route::get('/{id}/edit', [PackageController::class, 'edit'])->name('edit'); // Show edit form
    Route::put('/{id}', [PackageController::class, 'update'])->name('update'); // Update
    Route::delete('/{id}', [PackageController::class, 'destroy'])->name('destroy'); // Delete
});

