<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('home.home');
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/contact', function () {
    return view('contact.contact');
});
Route::get('/reservation', function () {
    return view('reservation.reservation');
});
Route::get('/calendar',[CalendarController::class , "index"]);
Route::post("/calendar/store" , [CalendarController::class , "store"]);
Route::get("/calendar/show" , [CalendarController::class , "show"]);
Route::get('/menu',[MenuController::class , "index"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
