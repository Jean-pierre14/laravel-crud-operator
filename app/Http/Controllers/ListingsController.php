<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index(){return view('listings',[
        'listing.index' => Listings::all()
    ]);}
    
    public function show(Listings $listing){
        return view('listing.show', ['listing' => $listing]);
    }
}