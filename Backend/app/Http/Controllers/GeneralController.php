<?php

namespace App\Http\Controllers;
use App\Models\General;
use App\Models\Country;
use Illuminate\Http\CountryRequest;
use Illuminate\Http\Request;


use Validator;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    ///////////Start:Country Module////////

    public function index()
    {
        
        if(auth()->check()) {
            return view('general.index');
        } else {
           
            return redirect()->route('login');
        }
    }

    
}