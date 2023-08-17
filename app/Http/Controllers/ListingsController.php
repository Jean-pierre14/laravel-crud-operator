<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function store(Request $request){
        // dd($request->all()); To check the fields
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        return redirect('/');
    }
}