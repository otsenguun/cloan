<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AppHelper;

class MasterController extends Controller
{
    public function dashboard(Request $request){
        return view("admin.master.dashboard");
    }
    public function users(Request $request){

        $body = [];
        $body["pagenumber"] = 1;
        $body["pagesize"] = 25;
        $body["is_kyc_approved"] = $request->is_kyc_approved;
        $body["user_email"] = $request->email;
        $body["user_mobile"] = $request->mobile;
        $response = AppHelper::ToCurl("/admin/userlist","post",$body);
        
        $users = json_decode($response["body"]);

        // dd($users);

        return view("admin.master.users",compact("users","request"));



    }


    public function user($id){
        $user_index = explode("_",$id);
        $body["userid"] = $user_index[0];

        $body["index"] = 0;
        $isaproved = $user_index[2];
        $response1 = AppHelper::ToCurl("/admin/userdetail","post",$body);
        $body["index"] = 1;
        $response2 = AppHelper::ToCurl("/admin/userdetail","post",$body);
        $body["index"] = 2;
        $response3 = AppHelper::ToCurl("/admin/userdetail","post",$body);

        $user_info = $response1["body"];
        $user_info2 = $response2["body"];
        $user_info3 = $response3["body"];

        $user_images = [
            $user_info,$user_info2,$user_info3
        ];
        
        // print_r($user_images);

        $user = new \stdClass;
        $user->id = $id;;
        if($isaproved == 1){
            $re_aprove = "false";
        }else{
            $re_aprove = "true";
        }
        // dd($user_images);
        $msj = "";

        return view("admin.master.user_confirm",compact("user_images","re_aprove","user","msj"));
    }
    public function approve(Request $request){
     
        $body["userid"] = $request->id;
        $body["approve"] = $request->approve;
        $body["reason"] = $request->reason;
        $response = AppHelper::ToCurl("/admin/approveUser","post",$body);
        
        $user_info = json_decode($response["body"]);
        if($request->approve == "true"){
            $re_aprove = "true";
            $msj = "Амжилттай баталгаажлаа";
        }else{
            $re_aprove = "false";
            $msj = "Цуцлагдлаа";
        }
        $user_info = $response["body"];
        $user = new \stdClass;
        $user->id = $request->id;

        $body = [];
        $body["userid"] = $request->id;

        $body["index"] = 0;
        $response1 = AppHelper::ToCurl("/admin/userdetail","post",$body);
        $body["index"] = 1;
        $response2 = AppHelper::ToCurl("/admin/userdetail","post",$body);
        $body["index"] = 2;
        $response3 = AppHelper::ToCurl("/admin/userdetail","post",$body);

        
        $user_info = $response1["body"];
        $user_info2 = $response2["body"];
        $user_info3 = $response3["body"];
        $user_images = [
            $user_info,$user_info2,$user_info3
        ];
        // dd($response);

        return view("admin.master.user_confirm",compact("user_images","re_aprove","user","msj"));
    }
    public function total_orders(Request $request){

        $body = [];
        // $body["pagenumber"] = 1;
        // $body["pagesize"] = 25;
        $response = AppHelper::ToCurl("/user/orderBorrowList","get",$body);
        dd($response);

        return view("admin.master.orders");
    }

    public function insertRate(Request $request){
        $msj = "";
        return view("admin.master.currency_rate",compact("msj"));
    }
    public function storeRate(Request $request){
        $msj = "";
        $body["convert_from"] = "USD";
        $body["convert_to"] = "MNT";
        $body["rate_amount"] = $request->rate_amount;
        $back = AppHelper::ToCurl("/admin/insertFlatCurrencyRate","post",$body);
        
        $return = json_decode($back["body"]);
        $code = $back["http_code"];
        if($code == 200){
            $msj ="Амжилттай";
        }

        return view("admin.master.currency_rate",compact("msj"));
    }
    

    
}
