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
Route::get('/general/country-list',[GeneralController::class,'country_list'])->name('general.country-list');
Route::get('/general/{country}/edit', [CountryController::class, 'edit'])->name('general.edit');




/* 
/ Routes for updating and deleting countries
Route::put('/countries/{country}', [CountryController::class, 'update'])->name('countries.update');
Route::delete('/countries/{country}', [CountryController::class, 'destroy'])->name('countries.destroy');

 */





Route::get('/general/country', [GeneralController::class,'create_country'])->name('general.create-country');

Route::get('/general/create-country', [GeneralController::class,'create_country'])->name('general.create-country');
Route::post('/general/store', [GeneralController::class,'store'])->name('general.store');

Route::get('/country/{id}/edit-country',[GeneralController::class,'edit_country'])->name('general.edit-country');
Route::put('/country/{id}/update', 'GeneralController@update_country')->name('general.update-country');


//////////////End:General Routes//////////////////////
