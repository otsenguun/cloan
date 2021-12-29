<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AppHelper;

class MasterController extends Controller
{
    public function dashboard(Request $request){

        $body = [];
       
        $page1 = 0;
        if($request->lend_page > 0){
            $page1 =  $request->lend_page - 1;
        }
        $body["pagenumber"] = $page1;
        $body["pagesize"] = 5;
        $response1 = AppHelper::ToCurl("/admin/orderLendListAll","post",$body);
        $lend_list = json_decode($response1["body"]);

        $body1 = [];
        $page2 = 0;
        if($request->borrow_page > 0){
            $page2 =  $request->borrow_page - 1;
        }
        // $body["pagenumber"] = $page2;
        $body1["pagenumber"] = $page2;
        $body1["pagesize"] = 5;
        $response2 = AppHelper::ToCurl("/admin/orderBorrowListAll","post",$body1);
        $borrow_list = json_decode($response2["body"]);
        // dd($borrow_list);
        // dump($body1); 
        return view("admin.master.dashboard",compact("borrow_list","lend_list","page1","page2"));

    }
    public function users(Request $request){

        $body = [];
        $body["pagenumber"] = 0;
        $body["pagesize"] = 25;
        $body["is_kyc_approved"] = $request->is_kyc_approved;
        $body["user_email"] = $request->email;
        $body["user_mobile"] = $request->mobile;
        $response = AppHelper::ToCurl("/admin/userlist","post",$body);
        
        $users = json_decode($response["body"]);

        return view("admin.master.users",compact("users","request"));

    }


    public function user($id){
        $user_index = explode("_",$id);
        $body["userid"] = $user_index[0];

        $body["index"] = 0;
        $isaproved = $user_index[2];
        $response1 = AppHelper::ToCurl("/admin/userResources","post",$body);
        $body["index"] = 1;
        $response2 = AppHelper::ToCurl("/admin/userResources","post",$body);
        $body["index"] = 2;
        $response3 = AppHelper::ToCurl("/admin/userResources","post",$body);

        $user_info = $response1["body"];
        $user_info2 = $response2["body"];
        $user_info3 = $response3["body"];

        $user_images = [
            $user_info,$user_info2,$user_info3
        ];

        $body_details["userid"] = $user_index[0];
        $body_details["index"] = 1;
        $response_details = AppHelper::ToCurl("/admin/userDetailInfo","post",$body_details);
        $user_info4 = $response_details["body"];
        $user_detail = json_decode($user_info4);
        
        $userdetails = ($user_detail->userlist->pagelist[0]);

        $user = new \stdClass;
        $user->id = $id;;
        if($isaproved == 1){
            $re_aprove = "false";
        }else{
            $re_aprove = "true";
        }

        $msj = "";

        return view("admin.master.user_confirm",compact("user_images","re_aprove","user","msj","userdetails"));

    }
    public function approve(Request $request){
     
        $body["userid"] = $request->id;
        if($request->approve == 1){
            $body["approve"] = "true";
        }else{
            $body["approve"] = false;
        }
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
        $response1 = AppHelper::ToCurl("/admin/userResources","post",$body);
        $body["index"] = 1;
        $response2 = AppHelper::ToCurl("/admin/userResources","post",$body);
        $body["index"] = 2;
        $response3 = AppHelper::ToCurl("/admin/userResources","post",$body);

        $user_info = $response1["body"];
        $user_info2 = $response2["body"];
        $user_info3 = $response3["body"];
        $user_images = [
            $user_info,$user_info2,$user_info3
        ];
        $body_details = [];
        $body_details["userid"] = $request->id;
        $body_details["index"] = 1;

        $response_details = AppHelper::ToCurl("/admin/userDetailInfo","post",$body_details);

        $user_info4 = $response_details["body"];
        $user_detail = json_decode($user_info4);

        $userdetails = ($user_detail->userlist->pagelist[0]);

        return view("admin.master.user_confirm",compact("user_images","re_aprove","user","msj","userdetails"));
    }
    public function total_orders(Request $request){

        $body = [];
       
        $page1 = 0;
        if($request->lend_page > 0){
            $page1 =  $request->lend_page - 1;
        }
        $body["pagenumber"] = $page1;
        $body["pagesize"] = 25;
        $response1 = AppHelper::ToCurl("/admin/orderLendListAll","post",$body);
        $lend_list = json_decode($response1["body"]);

        $body1 = [];
        $page2 = 0;
        if($request->borrow_page > 0){
            $page2 =  $request->borrow_page - 1;
        }
        // $body["pagenumber"] = $page2;
        $body1["pagenumber"] = $page2;
        $body1["pagesize"] = 25;
        $response2 = AppHelper::ToCurl("/admin/orderBorrowListAll","post",$body1);
        $borrow_list = json_decode($response2["body"]);
        // dd($borrow_list);
        // dump($body1); 
        return view("admin.master.orders",compact("borrow_list","lend_list","page1","page2"));
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
