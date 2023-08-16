<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

Route::get('/', [ListingsController::class, 'index']);

Route::get("/listings/{listing}", [ListingsController::class, 'show']);