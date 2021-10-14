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
    return redirect(route('register'));
});

Route::get('/signup', function () {
    return view('sign-up.sign-up');
}); // Will be deleted. Just used to testing purposes

Route::get('/declaimer', function () {
    return view('declaimer.declaimer');
})->name('declaimer'); //   Named route(client name followed by declaimer)

Route::middleware(['auth:sanctum', 'verified'])->get('/client', function () {
    return view('client.client');
})->name('dashboard'); //   dashboard

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile', function () {
    return view('client.profile.profile');
})->name('profile');  //    account profile

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/upload-docs', function () {
    return view('client.profile.upload-docs.upload-docs');
})->name('upload-documents'); //    upload documents

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/edit-profile', function () {
    return view('client.profile.edit-profile');
})->name('edit-profile'); 

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/edit-details', function () {
    return view('client.profile.edit-details');
})->name('edit-details'); //e   edit details

Route::middleware(['auth:sanctum', 'verified'])->get('/client/profile/unverified-account', function () {
    return view('client.profile.unverified-account');
})->name('account-status'); //  unverified account 

Route::middleware(['auth:sanctum', 'verified'])->get('/client/no-funds', function () {
    return view('client.profile.no-funds');
})->name('account-balance'); //   no funds 

Route::middleware(['auth:sanctum', 'verified'])->get('client/no-history', function () {
    return view('client.history.no-history');
})->name('history'); //  No history 

Route::middleware(['auth:sanctum', 'verified'])->get('/client/history', function () {
    return view('client.history.history');
})->name('history'); //  history 


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
