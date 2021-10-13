<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/', function () {
    // The home page will be sign in
    return view('sign-in');
});

Route::get('/signup', function () {
    return view('sign-up.sign-up');
});

Route::get('/declaimer', function () {
    return view('declaimer.declaimer');
})->name('johnnasimba/declaimer'); //   Named route(client name followed by declaimer)

Route::get('/client', function () {
    return view('client.client');
}); 
Route::get('/client/profile', function () {
    return view('client.profile.profile');
});
Route::get('/client/profile/edit-profile', function () {
    return view('client.profile.edit-profile');
}); 
Route::get('/client/profile/edit-details', function () {
    return view('client.profile.edit-details');
}); 
Route::get('/client/profile/unverified-account', function () {
    return view('client.profile.unverified-account');
}); //  unverified account
Route::get('/client/no-funds', function () {
    return view('client.profile.no-funds');
}); //   no funds
Route::get('/client/no-history', function () {
    return view('client.history.no-history');
}); //  No history
Route::get('/client/history', function () {
    return view('client.history.history');
}); //  history

// This route is for testing CRUD operations
Route::resource('clients', ClientController::class);