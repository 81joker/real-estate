<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontHomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
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
