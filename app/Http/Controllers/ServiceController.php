<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function page(){
        return view('pages.Services');
    }

    function priceData(Request $request){
        return DB::table('prices')->get();
    }
}
