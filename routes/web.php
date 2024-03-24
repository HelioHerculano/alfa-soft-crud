<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/create/contact', [ContactController::class,'create'])->name('create.contact');
    Route::post('/store/contact', [ContactController::class,'store'])->name('contact.store');

    Route::get('/edit/{id}/contact', [ContactController::class,'edit'])->name('edit.contact');
    Route::put('/update/{id}/contact', [ContactController::class,'update'])->name('contact.update');


    Route::get('/destroy/{id}/contact', [ContactController::class,'destroy'])->name('contact.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [ContactController::class,'index'])->name('index');

// Route::get('/login',[UserController::class,'UserLogin'])->name('login');