<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DeclaimerController;

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
    return redirect(route('register'));
});




Route::middleware(['auth:sanctum', 'verified'])->get('/client', function () {
    return view('client.client');
})->name('client'); //   dashboard

// DECLAIMER
Route::middleware(['auth:sanctum', 'verified'])->get('declaimer', [DeclaimerController::class, 'index'] )->name('declaimer');  //    account profile

// PROFILE ROUTES
Route::middleware(['auth:sanctum', 'verified'])->get('profile', [ProfileController::class, 'index'] );  //    account profile
Route::middleware(['auth:sanctum', 'verified'])->get('profile/details', [ProfileController::class, 'create'] )->name('upload-details');  //    create account details
Route::middleware(['auth:sanctum', 'verified'])->post('profile/details', [ProfileController::class, 'store'] )->name('details');  //    create account details





Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/upload-docs', function () {
    return view('client.profile.upload-docs.upload-docs');
}); //    upload documents

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/edit-profile', function () {
    return view('client.profile.edit-profile');
}); 

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/edit-details', function () {
    return view('client.profile.edit-details');
}); //e  edit details

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/unverified-account', function () {
    return view('client.profile.unverified-account');
}); //  unverified account 

Route::middleware(['auth:sanctum', 'verified'])->get('/client/no-funds', function () {
    return view('client.profile.no-funds');
}); //   no funds 

Route::middleware(['auth:sanctum', 'verified'])->get('client/no-history', function () {
    return view('client.history.no-history');
}); //  No history 

Route::middleware(['auth:sanctum', 'verified'])->get('/client/history', function () {
    return view('client.history.history');
}); //  history 

// // Profile route
// Route::resource('profile', ProfileController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
