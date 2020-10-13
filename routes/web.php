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





//Route::get('/unicrimp', [App\Http\Controllers\UnicrimpController::class, 'index']); //dashboard route
Route::get('/{company?}', [App\Http\Controllers\MarketingController::class, 'index']); //dashboard route


//Route::get('/{ovia}', function () {
//    return view('ovia');
//});
//Route::get('/{unicrimp}', function () {
//    return view('unicrimp');
//});

Route::post('/scolmore', [App\Http\Controllers\MarketingController::class, 'store']);


Route::delete('/{user}', [App\Http\Controllers\MarketingController::class, 'destroy']);



//Route::get('/marketing/{username}', [App\Http\Controllers\MarketingController::class, 'show']);       //dashboard to show the new user
//Route::get('/create', [App\Http\Controllers\MarketingController::class, 'create']);



