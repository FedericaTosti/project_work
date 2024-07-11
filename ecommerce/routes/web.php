<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });


// 
// 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Importa il FortifyController
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

// Route::get('/', function () {
//     return view('welcome');
// });
// // ->middleware('auth')


Route::get('/', function () {
    return redirect()->route('products.index');
})->name('home');


// 
// 
// TEST
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [HomeController::class, 'show'])->name('products.show');

Route::resource('admin/products', ProductController::class);

// Rotte di login e registrazione
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('/login', [AuthenticatedSessionController::class, 'store']);
// Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth')->group(function () {
//     Route::get('/products', [AuthController::class, 'index'])->name('products.index');
//     // Altre route protette dall'autenticazione
// });
// fai questa
Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products', [AuthController::class, 'index'])->name('products.index');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// // test uso
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Rotte protette da autenticazione
// Route::middleware('auth')->group(function () {
//     Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//     Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//     Route::post('/products', [ProductController::class, 'store'])->name('products.store');
//     Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//     Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
//     Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// });



