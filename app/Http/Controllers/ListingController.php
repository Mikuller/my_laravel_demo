<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //for all Listings
    public function index(){

        return view('listings.index', [
            'Listings' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);

    }
    //for single Listing
    public function show(Listing $listing){

         return view('listings.show', [
             'Listing' => $listing
         ]);

    }

    public function create(){
        return view('listings.create');
    }
}
