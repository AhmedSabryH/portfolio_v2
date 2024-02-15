<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pages;
use App\Http\Controllers\message;
use App\Http\Controllers\project;
use App\Http\Controllers\blog;
use App\Http\Controllers\cat;
use App\Http\Controllers\type;
use Illuminate\Support\Facades\Route;

Route::get('/',[Pages::class,'index'])->name('home');

Route::get('/search/{id}',[Pages::class,'search']);

Route::get('/filter/{type}/{id}',[Pages::class,'filter'])->name('filter');

Route::resource('msg', message::class);
Route::resource('project', project::class);
Route::resource('blog', blog::class);

Route::resource('categorie', cat::class);
Route::resource('type', type::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
