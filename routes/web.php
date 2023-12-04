<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BungaController;
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
Route::get('/bunga', [BungaController::class, 'index'])->name('bunga');
Route::post('bunga', [BungaController::class, 'store'])->name('bungas.store');
Route::get('/bunga/create', [BungaController::class, 'create'])->name('bungas.create');
Route::post('bunga/{bunga}', [BungaController::class, 'update'])->name('bungas.update');
Route::delete('bunga/{bunga}', [BungaController::class, 'destroy'])->name('bungas.destroy');
Route::get('/bunga/{bunga}/edit', [BungaController::class, 'edit'])->name('bungas.edit');
Route::post('/bunga/{bunga}', [BungaController::class, 'update'])->name('bungas.update');

Route::get('login', function() {
    return view('login.login');
});

Route::get('/dashboard', function() {
     return view('dashboard');
});

// Route::get('/', function () {
//     return view('welcome');
// });
