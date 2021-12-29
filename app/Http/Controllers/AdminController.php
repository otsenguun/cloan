<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Helpers\AppHelper;

class AdminController extends Controller
{
    public function admin(){
        
        $body = [];
        $body['pagenumber'] = 0;
        $body['pagesize'] = 25;
        // $response = AppHelper::ToCurl("/geninfo/flatCurrency","get",$body);
        
        // $flatcurrency = json_decode($response["body"]);

        // $response1 = AppHelper::ToCurl("/geninfo/financialInsts","get",$body);
        // $financialInsts = json_decode($response1["body"]);

        $response2 = AppHelper::ToCurl("/geninfo/convertRateCryptosDistinctLast","post",$body);
        $cryptos = json_decode($response2["body"]);
        // dd($cryptos);

        // dd($cryptos);
        return view("admin.main",compact("cryptos"));
    }
    public function home(){


        return view("admin.welcome");
    }
    public function dashboard(){

        $dashboard = 1;
        return redirect("/home");
      
    }
    public function showUsers(Request $request){

        $body = ["pagenumber" => 0 ,"pagesize" => 25];
        $response = AppHelper::ToCurl("/admin/userslist","get",$body);
        
        $users = json_decode($response["body"]);
        // dd($response);
        // dd($response);
        return view("admin.master.users",compact("users"));
    }
    public function get_last_curr(Request $request){
        $body = [];
        $body['pagenumber'] = 0;
        $body['pagesize'] = 25;
        $response2 = AppHelper::ToCurl("/geninfo/convertRateCryptosDistinctLast","post",$body);
        $cryptos = json_decode($response2["body"]);
        $arr =  $cryptos->gen_exchrate_cryptolist;

        return json_encode($arr);
    }
}
