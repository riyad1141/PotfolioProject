<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function page(Request $request){
        return view('pages.Contact');
    }
}
