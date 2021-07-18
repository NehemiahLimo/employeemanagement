<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function index() {
         // Get Method
         $countries = Country::all();
         return view('countries.index',compact('countries'));
    }

    public function create()
    {
       
        return view('countries.index', compact('countries'));
    }
    public function edit()
    {
        // Get Method
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function store(Request $request, Country $country){
        
    }

}
