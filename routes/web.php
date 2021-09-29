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
})->name('johnnasimba'); //  Named route(Client name)


// This route is for testing CRUD operations
Route::resource('clients', ClientController::class);