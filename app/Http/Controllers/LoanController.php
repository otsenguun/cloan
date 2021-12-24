<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function create(Request $request){
        $body = [];


        $back = AppHelper::ToCurl("/geninfo/crypto","get",$body);
        $coins = json_decode($back['body']);
        $code = $back["http_code"];

        // dd($coins);
        $msj = "";
        return view("admin.loan.create",compact("msj","coins"));

    }
    public function store(Request $request){

        $body = [];
        $body["crypto_sname"] =  $request->crypto_sname;
        $body["amount"] =  $request->amount;
        $body["priority"] =  $request->priority;

        $back = AppHelper::ToCurl("/useroper/orderBorrow","post",$body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
        // dd($back);
        if($code == "200" && $response->success == true){
            $msj = "Амжилттай илгээгдлэ";
        }else{
            $msj = $response->msg;
        }
        $body2= [];
        $back2 = AppHelper::ToCurl("/geninfo/crypto","get",$body2);
        $coins = json_decode($back2['body']);
        $code = $back["http_code"];

        // dd($response);
        // return view('auth.register_second',compact("response"));

        return view("admin.loan.create",compact("msj",'coins'));

    }
    public function createloaner(Request $request){

        $msj = "";
        return view("admin.loan.create_loaner",compact("msj"));

    }

    public function storeLoaner(Request $request){
        $body = [];
        $body["currency"] =  $request->currency;
        $body["amount"] =  $request->amount;
        $body["priority"] =  99;

        $back = AppHelper::ToCurl("/useroper/orderLend","post",$body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
        // dd($back);
        if($code == "200" && $response->success == true){
            $msj = "Амжилттай илгээгдлэ";
        }else{
            $msj = $response->msg;
        }
      
        return view("admin.loan.create_loaner",compact("msj"));

    }
    public function historyLoan(Request $request){
    
        $body = [];

        $back1 = AppHelper::ToCurl("/user/orderBorrowList","get",$body);
        $borrow_list = json_decode($back1['body']);
        $code = $back1["http_code"];
        // dd($back1);
      
  

        $back = AppHelper::ToCurl("/user/orderLendList","get",$body);
        $lend_list = json_decode($back['body']);
        $code = $back["http_code"];
        dd($back1);
        
        return view("admin.loan.history",compact("borrow_list","lend_list"));

    }
    public function dans(Request $request){

        return view("admin.loan.dans");

    }
    
}