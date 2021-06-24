<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontHomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MailController;
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

Route::get('/', [frontHomeController::class, 'index']);

Route::get('venues/{slug}/{id}', [VenueController::class, 'show'])->name('venues.show');
// Route::get('event_type/{slug}', [EventTypeController::class, 'index'])->name('event_type');
Route::get('event_type/{slug}', [EventTypeController::class, 'index'])->name('event_type');
Route::get('location/{slug}', [LocationController::class, 'index'])->name('location');
Route::get('search', [SearchController::class, 'index'])->name('search');

// Route::view('contact', 'q2e.contact')->name('contact');
Route::view('contact', 'send.contact')->name('contact');
Route::post('kontakt', [MailController::class, 'sendEmail'])->name('kontakt');



Route::view('about', 'q2e.about')->name('about');
//Route::post('send', [MailController::class, 'sendEmail'])->name('send.contact');
