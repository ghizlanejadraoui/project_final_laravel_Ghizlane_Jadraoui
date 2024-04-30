<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
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
Route::get('/menu' , [MenuController::class , "index"]);
Route::post('/menu/store' , [MenuController::class , "store"]);
// Route::patch('/menu/update' , [MenuController::class , "update"]);
Route::put('/menu/update/{id}', [MenuController::class , "update"])->name('menu.update');
Route::delete('/menu/{id}', [MenuController::class , "destroy"])->name('menu.destroy');
Route::get('/admin',[AdminController::class , "index"])->name('admin.index')->middleware("role:admin");
Route::get('/session',[StripeController::class , "session"])->name("session");
Route::get('/success',[StripeController::class , "session"])->name("success");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
