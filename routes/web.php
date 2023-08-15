<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listings;

Route::get('/posts', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listings::all()
    ]);
});