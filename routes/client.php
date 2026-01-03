<?php

use App\Http\Controllers\ClientProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return Auth::check()
        ? view('layouts.clapp')
        : view('layouts.clguest');
})->name('home');

//Route::get('/', function () {
    //return view('layouts.clguest');
//});

//Route::get('/', function () {
//return view('layouts.clapp');
//})->middleware(['auth', 'verified'])->name('app');



Route::middleware('auth')->group(function () {
Route::get('/profile', [ClientProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ClientProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ClientProfileController::class, 'destroy'])->name('profile.destroy');
});
