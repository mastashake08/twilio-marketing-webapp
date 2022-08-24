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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $contacts = \App\Models\Contact::paginate(15);
    return view('dashboard')->with([
      'contacts' => $contacts
    ]);
})->middleware(['auth'])->name('dashboard');

Route::post('/send-message', 'App\Http\Controllers\MessageController@store');
Route::post('/upload-contacts', 'App\Http\Controllers\ContactController@import');
Route::post('/add-contact', 'App\Http\Controllers\ContactController@store');

require __DIR__.'/auth.php';
