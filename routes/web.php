<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listings;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listings::all()
    ]);
});

Route::get("/listings/{id}", function($id){
    return view('listing', ['listing' => Listings::find($id)]);
});