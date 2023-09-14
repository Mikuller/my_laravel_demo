<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*common resource routes 
index- show all listing
show - show single listing from id
create - show form to create listing
store - store listing in DB
edit - show for to edit listing
update - update lising info
destroy - delete a listing
*/



//all listing
Route::get('/', [ListingController::class, 'index']);

Route::get( '/listings/create', [ListingController::class, 'create']);

//single listing
Route::get( '/listings/{listing}', [ListingController::class, 'show']);