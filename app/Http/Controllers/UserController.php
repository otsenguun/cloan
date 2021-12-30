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
            setcookie("user_name", $request->username);
            // dd($request->username);
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
            $exec = "Амжилттай Бүртгэгдлээ нэвтэрнэ үү";
            return view('auth.login',compact("exec"));
        }elseif($code == 409){
            $exec = "Бүртгэлтэй байна";
        }else{
            $exec = "Амжилтгүй";
        }
        return view('auth.login',compact("exec"));
    }

    public function logout(){
        $body = [];
        if (isset($_COOKIE['access_token'])) {
            $back = AppHelper::ToCurl("/geninfo/logout","get",$body);
            
            unset($_COOKIE['access_token']); 
            setcookie('access_token', null, -1, '/'); 
            setcookie('user_role', null, -1, '/'); 
            setcookie('user_name', null, -1, '/'); 

           

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

       
        $body2 = [];
        
        $body2["index"] = 0;
        $response1 = AppHelper::ToCurl("/geninfo/userResources","post",$body2);
        $body2["index"] = 1;
        $response2 = AppHelper::ToCurl("/geninfo/userResources","post",$body2);
        $body2["index"] = 2;
        $response3 = AppHelper::ToCurl("/geninfo/userResources","post",$body2);

        $user_info = $response1["body"];
        $user_info2 = $response2["body"];
        $user_info3 = $response3["body"];
        $user_images = 
        [
            "f_img" => $user_info,
            "b_img" => $user_info2,
            "s_img" => $user_info3
        ];
        
        $f_body = [];
        $financialInsts = AppHelper::ToCurl("/geninfo/financialInsts","get",$f_body);
        
        $bank_info = json_decode($financialInsts["body"]);
        // dd($response);

        // $code = $back["http_code"];
        return view('auth.register_second',compact("response","user_images","bank_info"));

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
        $body["financial_institution_name"] =  $request->financial_institution_name;
        $body["financial_account"] =  $request->financial_account;
        $body["financial_account_name"] =  $request->financial_account_name;

        $url  = URL::to('/');

        $tmpfile = $_FILES["reg_1"]['tmp_name'];
        $filename = basename($_FILES["reg_1"]['name']);
        // dd($filename !="");
        if($filename !=""){
            $body["reg_1"] =  curl_file_create($tmpfile, $_FILES["reg_1"]['type'], $filename);
        }
        
        $tmpfile1 = $_FILES["reg_2"]['tmp_name'];
        $filename1 = basename($_FILES["reg_2"]['name']);
        if($filename1 !=""){
            $body["reg_2"] =  curl_file_create($tmpfile1, $_FILES["reg_2"]['type'], $filename1);
        }
        $tmpfile2 = $_FILES["reg_3"]['tmp_name'];
        $filename2 = basename($_FILES["reg_3"]['name']);
        if($filename2 !=""){
            $body["reg_3"] =  curl_file_create($tmpfile2, $_FILES["reg_3"]['type'], $filename2);
        }

        $back = AppHelper::ToCurl("/user/meupdateKYC","post",$body);
        // dump($body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
       
        // print_r($url);
        // dd($response);

        if($code == 200){
            // dd($back);
            return redirect("/me")->with('success', 'Амжилттай илгээгдлээ');
        }else{
            return redirect()->back()->with('failed', 'Амжилтгүй боллоо мэдээлэлээ шалгануу');   
        }

    }
    
    public function changePass(Request $request){

        $body = [];
        $msj = "";
        return view('admin.loan.change_password',compact("msj"));

    }
    public function changePassword(Request $request){

        $body = [];
        $msj = "";
        $body["password_old"] =  $request->password_old;
        $body["password_new"] =  $request->password_new;
        $body["password_new_repeat"] =  $request->password_new_repeat;

        $back = AppHelper::ToCurl("/geninfo/changePassword","post",$body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
        // dd($response);
        if( !isset($response->success) ){
            $msj = "Амжилттай солигдлоо";
        }else{
            if($response->msg == "Old password is incorrect"){
                $msj = "Өмнөх нууц үг буруу байна";
            }else{
                $msj = "Нууц үг хамгийн багадаа 8 оронтой 1 том үсэг, 1 жижиг үсэг, тоо, 1 тусгай тэмдэгт байна. Зай, мөр шилжиж болохгүй!";
            }
            
        }
        // dd($response);

        return view('admin.loan.change_password',compact("msj"));


    }
    public function health(Request $request){

        $body = [];
        $back = AppHelper::ToCurl("/health","get",$body);
        $response = json_decode($back['body']);
        $code = $back["http_code"];
        dd($back);
        // return view('auth.register_second',compact("response"));

    }

    public function emailconfirm(Request $request){

        $body = [];
  
       
        $back = AppHelper::ToCurl("/geninfo/sendVerifyEmail","get",$body);

        // dd($back);

        return view('admin.loan.verify_email');

    }
   

    public function emailconfirmToken(Request $request){

        $body = [];
        $body['token'] = $request->token;
    //    dd($request->token);
        $back = AppHelper::ToCurl("/manage/verifyingEmailWithToken","post",$body);
        $response = json_decode($back['body']);
        // dd($back);
        $msj = "";
        if(isset($response->success) && $response->success == true){
            $msj = "Баталгаажлаа";
        }else{
            $msj = "Амжилтгүй";
        }

        return view('admin.loan.verify_email_done',compact("msj"));

    }

    public function forgotPassword(Request $request){

        $body = [];
        $body['email'] = $request->email;
        $body['challenge'] = "2Oxiu46KUX5ML2117705";

        $back = AppHelper::ToCurl("/manage/resetPasswordSendEmail","post",$body);

        $response = json_decode($back['body']);
        
        $msj = "";
        if(isset($response->success) && $response->success == true){
            $msj = "Баталгаажлаа";
        }else{
            $msj = "Амжилтгүй";
        }

        return view('admin.loan.forgot_password_info',compact("msj"));

    }

    public function forgotPasswordToken(Request $request){

       
        $token = $request->token;
        // dd($token);

        return view('admin.loan.forgot_password',compact("token"));

    }

    public function forgotPasswordUpdate(Request $request){

        $body = [];
        $body['token'] = $request->token;
        $body['password_new'] = $request->password_new;
        $body['password_new_repeat'] = $request->password_new_repeat;

        $back = AppHelper::ToCurl("/manage/resettingPasswordWithToken","post",$body);
        $token = $request->token;
        $response = json_decode($back['body']);
        
        // dd($body);

        $msj = "";
        if(isset($response->success) && $response->success == true){
            $msj = "Нууц үг амжилттай солигдлоо";
            return view('admin.loan.forgot_password_success',compact("msj"));
        }else{
            $msj = "Нууц үг хамгийн багадаа 8 оронтой 1 том үсэг, 1 жижиг үсэг, тоо, 1 тусгай тэмдэгт байна. Зай, мөр шилжиж болохгүй!";
            return view('admin.loan.forgot_password',compact("token","msj"));
        }
        

    }

    

    


}
