<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemCartController;
use App\Http\Controllers\MangaController;
use App\Models\Invoice;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/manga-unicor', [HomeController::class, 'create'])->name('manga-unicor');

Route::get('/test-data', [HomeController::class, 'data'])->name('test-data');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('create-cart', [CartController::class, 'store'])->name('cart.store');

    
    Route::post('add-item-cart',[ItemCartController::class, 'store'])->name('itemCart.add');
    Route::patch('add-item-cart',[ItemCartController::class, 'store'])->name('itemCart.update');
    Route::delete('delete-item-cart', [ItemCartController::class, 'destroy'])->name('itemCart.destroy');


    Route::get('/invoice',[InvoiceController::class, 'index'])->name('invoice.index');
    Route::post('/invoice',[InvoiceController::class, 'store'])->name('invoice.store');

    Route::get('/mangas',[MangaController::class, 'index'])->name('mangas.index');



/*    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/


    
});

require __DIR__.'/auth.php';
