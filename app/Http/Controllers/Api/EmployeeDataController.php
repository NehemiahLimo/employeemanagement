<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class EmployeeDataController extends Controller
{
    //

    public function nchi(){
        $countries = Country::all();
        return response()->json($countries);
    }
}
