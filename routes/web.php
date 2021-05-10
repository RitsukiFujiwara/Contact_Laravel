<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('contact.index');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\ContactFormController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact/store', [App\Http\Controllers\ContactFormController::class, 'store'])->name('contact.store');
Route::get('show/{id}', [App\Http\Controllers\ContactFormController::class, 'show'])->name('contact.show');
Route::get('edit/{id}', [App\Http\Controllers\ContactFormController::class, 'edit'])->name('contact.edit');
Route::get('update/{id}', [App\Http\Controllers\ContactFormController::class, 'update'])->name('contact.update');