<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

// Common Ressource Rquest
// index - show all listings
// show - Show single listings
// create - Show form to create new listing
// store - stroe new data 
// edit - show form to edit 
// update - update listing 
// destroy - delete listing

Route::get('/', [ListingsController::class, 'index']);

Route::get("/listings/create", [ListingsController::class, 'create']);

// This must be the last route in controller
Route::get("/listings/{listing}", [ListingsController::class, 'show']);