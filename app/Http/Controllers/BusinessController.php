<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){
        $businesses = Business::all();

        $business = Business::find(1);

        $businessWhere = Business::where('name', 'Schmeler-Graham')->get();

        $businessWhereFirst = Business::where('name', 'Schmeler-Graham')->first();
        dd($businessWhereFirst, $businessWhere, $business, $businesses);
    }
}
