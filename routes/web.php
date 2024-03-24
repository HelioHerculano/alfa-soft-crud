<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class,'index'])->name('index');

Route::get('/create/contact', [ContactController::class,'create'])->name('create.contact');
Route::post('/store/contact', [ContactController::class,'store'])->name('contact.store');

Route::get('/edit/{id}/contact', [ContactController::class,'edit'])->name('edit.contact');
Route::post('/update/{id}/contact', [ContactController::class,'update'])->name('contact.update');
