<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PotfolioController extends Controller
{
    function page(){
        return view('pages.Home');
    }

    function Testimonial_Data(Request $request){
        return DB::table('details')->get();
    }
    function gallery_Data(Request $request){
        return DB::table('gallerys')->get();
    }
    function social_Data(Request $request){
        return DB::table('socials')->first();
    }
}
