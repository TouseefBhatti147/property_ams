<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;
//////////////Start:User Routes/////////////////////////
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/register', 'Auth\RegisterController@register')->name('register');
require __DIR__.'/auth.php';
//////////////End:User Routes/////////////////////////
//////////////Start:General Routes////////////////////
Route::get('/general', [GeneralController::class, 'index'])->name('general.index');
//Route::get('/general', function () { return view('index');})->name('general.index');


//////////////End:General Routes//////////////////////
