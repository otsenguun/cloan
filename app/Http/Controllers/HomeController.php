<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;
use URL;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\ProductImages;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

    }

    public function home(Request $request){
       
        return view('dashboard');

    }
    
    public function loan(Request $request){

        return view('loan');

    }

    public function confirm(Request $request){

        return view('auth.confirm');

    }

    public function user_details_org(Request $request){
        
        return view('auth.register_second_org');

    }
    


}
