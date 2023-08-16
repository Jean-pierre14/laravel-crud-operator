<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index(){
        
        return view('listing.index',[
        'listings' => Listings::latest()->filter(request(['tag','search']))->get()
    ]);}
    
    public function show(Listings $listing){
        return view('listing.show', ['listing' => $listing]);
    }

    public function create(){
        return view('listing.create');
    }
}