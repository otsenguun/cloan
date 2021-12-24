<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use Illuminate\Http\Request;
use URL;

class UserController extends Controller
{
    public function login(Request $request){

        $body = [];
        // $body["username"] =  $_POST["username"];
        // $body["password"] =  $_POST["password"];
        $body["username"] =  $request->username;
        $body["password"] =  $request->password;
        // dd($request);
        $back = AppHelper::ToCurl("/manage/login","post",$body);
        // dd($back);
        $response = json_decode($back['body']);
        $code = $back["http_code"];

       

        // dd($response);
        if($code == 200 && isset($response->access_token )){
            setcookie("access_token", $response->access_token);
            setcookie("user_role", json_encode($response->roles));
            // dd("dasd");
            return redirect("/home");
        }else{
            $exec = "Нууц үг эсвэл нэвтрэх нэр буруу байна";
            return view('auth.login',compact("exec"));
        }
        
    }
    public function register(Request $request){
        $body = [];
        $body["username"] =  $request->username;
        $body["mobilenumber"] =  $request->mobilenumber;
        $body["firstname"] =  $request->firstname;
        $body["lastname"] =  $request->lastname;
        $body["password"] =  $request->password;
        // dd($request);
        $back = AppHelper::ToCurl("/manage/register","post",$body);
        // dd($back);
        $response = json_decode($back['body']);
        $code = $back["http_code"];

       

        // dd($back);
        if($code == 201 && $response->msg == "User Created successfully"){
            $exec = "Амжилттай Бүртгэгдлээ нэвтэр нүү";
            return view('auth.login',compact("exec"));
        }elseif($code == 409){
            $exec = "Бүртгэлтэй байна";
        }else{
            $exec = "Амжилтгүй";
        }
        return view('auth.login',compact("exec"));
    }

    public function logout(){

        if (isset($_COOKIE['access_token'])) {
            unset($_COOKIE['access_token']); 
            setcookie('access_token', null, -1, '/'); 
            setcookie('user_role', null, -1, '/'); 
            return redirect("/");
        } else {
            die("s");
        }
        

    }

    public function me(){

        $body = [];
        $response = AppHelper::ToCurl("/geninfo/me","get",$body);
        
        $user = json_decode($response["body"]);
        // dd($response);
        // dd($user);
        if(in_array("cl-genuser",$user->roles)){
            return view("admin.loan.profile",compact("user"));
        }else{
            return view("admin.master.profile",compact("user"));
        }
        
    }

    public function user_details(Request $request){

        $body = [];
        $body["firstname"] =  $request->firstname;
        $body["lastname"] =  $request->lastname;
        $body["country_reg_id"] =  $request->country_reg_id;
        $body["address"] =  $request->address;
        $body["consent_agree_id"] =  $request->consent_agree_id;
        $body["is_consent_agreed"] =  $request->is_consent_agreed;
        $body["reg_1"] =  $request->reg_1;
        $body["reg_2"] =  $request->reg_2;
        $body["reg_3"] =  $request->reg_3;
        // $body = json_encode($body);
        $back = AppHelper::ToCurl("/user/meinfoKYC","post",$body);
        // dd($back);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
        return view('auth.register_second',compact("response"));

    }

    public function user_details_update(Request $request){



        // dd($request);
        
        $body = [];
        $body["firstname"] =  $request->firstname;
        $body["lastname"] =  $request->lastname;
        $body["country_reg_id"] =  $request->country_reg_id;
        $body["address"] =  "Хан-Уул";
        $body["consent_agree_id"] =  "consent_id";
        $body["is_consent_agreed"] =  'true';

        $url  = URL::to('/');

        $tmpfile = $_FILES["reg_1"]['tmp_name'];
        $filename = basename($_FILES["reg_1"]['name']);
        $body["reg_1"] =  curl_file_create($tmpfile, $_FILES["reg_1"]['type'], $filename);

        $tmpfile1 = $_FILES["reg_2"]['tmp_name'];
        $filename1 = basename($_FILES["reg_2"]['name']);
        $body["reg_2"] =  curl_file_create($tmpfile1, $_FILES["reg_2"]['type'], $filename1);

        $tmpfile2 = $_FILES["reg_3"]['tmp_name'];
        $filename2 = basename($_FILES["reg_3"]['name']);
        $body["reg_3"] =  curl_file_create($tmpfile2, $_FILES["reg_3"]['type'], $filename2);
 

        $back = AppHelper::ToCurl("/user/meupdateKYC","post",$body);
        // dump($body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
       
        // print_r($url);
        // dd($response);

        if($code == 200){
            // dd($back);
            return redirect("/home");
        }else{
            return "failed";
        }

    }

    public function health(Request $request){

        $body = [];
        $back = AppHelper::ToCurl("/health","get",$body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
        dd($back);
        // return view('auth.register_second',compact("response"));

    }

    


}
