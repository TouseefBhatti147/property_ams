<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\CountryController;

use App\Http\Controllers\CityController;

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

////////////////////////STRT:Country///////////////
Route::get('/general/country/country-list',[CountryController::class,'country_list'])->name('general.country.country-list');
Route::get('/general/country/create-country', [CountryController::class,'create_country'])->name('general.country.create-country');
Route::post('/general/country/store-country', [CountryController::class,'store_country'])->name('general.country.store-country');
Route::delete('/general/country-destroy/{country}', [CountryController::class, 'destroy_country'])->name('general.country.destroy-country');
Route::get('/country/{id}/edit-country', [CountryController::class, 'edit_country'])->name('general.country.edit-country');
Route::put('/general/update-country/{country}', [CountryController::class, 'update_country'])->name('general.country.update-country');
//////////////////////END:Country///////////////////
////////////////////////STRT:City///////////////
Route::get('/general/city/city-list',[CityController::class,'city_list'])->name('general.city.city-list');
Route::get('/general/city/create-city', [CityController::class,'create_city'])->name('general.city.create-city');
Route::post('/general/city/store-city', [CityController::class,'store_city'])->name('general.city.store-city');
Route::delete('/general/city-destroy/{city}', [CityController::class, 'destroy_city'])->name('general.city.destroy-city');
Route::get('/city/{id}/edit-city', [CityController::class, 'edit_city'])->name('general.city.edit-city');
Route::put('/general/update-city/{city}', [CityController::class, 'update_city'])->name('general.city.update-city');
//////////////////////END:City///////////////////
//////////////End:General Routes//////////////////////
