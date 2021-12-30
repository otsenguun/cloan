<?php

namespace App\Helpers;

class AppHelper
{
    
    public static function ToCurl($url,$method,$body){

        if($url == "/health"){
            $main_url = "https://d2dyd4ittdzdji.cloudfront.net/util"; 
        }else{
            $main_url = "https://d2dyd4ittdzdji.cloudfront.net/apib-a"; 
        }
        
        $sub_url = $url;
        // $headers =  ['Content-Type: application/x-www-form-urlencoded'];

        $ch = curl_init();
        // set url
        curl_setopt($ch, CURLOPT_URL, $main_url.$sub_url);
        

        if(isset($_COOKIE["access_token"]) && $url != "/manage/login"){
            $token = $_COOKIE["access_token"];
            
            if($url == "/manage/register"){
               
            }else{
                $headers[] = ("Authorization: Bearer ".$_COOKIE["access_token"]);
            }
           
            // array_push($headers,"Token: ".$_COOKIE["access_token"]);
        }

        if($method == "post"){
            if($url == "/manage/login"){
                $headers =  ['Content-Type: application/x-www-form-urlencoded'];
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($body));
            }else{
                $headers[] = ("Content-Type: multipart/form-data");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$body);
                // dd($body);
            }
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
        // dd($output);
        // dd($headers);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        // close curl resource to free up system resources
        curl_close($ch);  

        //season expired
        // dd($httpcode);
        $response = [];
        $response['http_code'] = $httpcode;
        $response['body'] = $output;
        
        return $response;

    }

    public static function getRole(){

       $roles = json_decode($_COOKIE["user_role"]);

       return $roles;
    }
    public static function getName(){

        $name = json_decode($_COOKIE["user_name"]);
 
        return $name;
     }

    public static function getInfoOrder($string){

        $info = [
                "CANCELED_BEDELETED" => "<span class='badge badge-danger'>Цуцлагдсан</span>",
                "WAITING_CONFIRM" => "<span class='badge badge-dark'>Баталгаажуулаагүй</span>",
                "CONFIRMED_WAITING_MATCH" => "<span class='badge badge-warning'>Хүлээгдэж буй</span>"
        ];

        if(isset($info[$string])){
            return $info[$string];
        }else{
            return "";
        }
 
        // return $name;
     }

     public static function getCryptoIMG($name,$index){

        $main_url = "https://d2dyd4ittdzdji.cloudfront.net/apib-a"; 
        $sub_url = "/geninfo/cryptoResources";
        
        $body = [
            "crypto_short_name" => $name,
            "index" => $index
        ];
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $main_url.$sub_url);

        if(isset($_COOKIE["access_token"])){
            $token = $_COOKIE["access_token"];
            $headers[] = ("Authorization: Bearer ".$_COOKIE["access_token"]);
        }else{
            return redirect()->route('login');
        }
        $headers[] = ("Content-Type: multipart/form-data");
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$body);
        $output = curl_exec($ch);
        
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);  

        $response = json_decode($output);
        // dd($response);
        return $output;
       
     }

     

    public static function CheckAuth(){

        $main_url = "https://d2dyd4ittdzdji.cloudfront.net/apib-a"; 
        $sub_url = "/geninfo/me";
        $headers =  ['Content-Type: application/x-www-form-urlencoded'];

        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $main_url.$sub_url);

        if(isset($_COOKIE["access_token"])){
            $token = $_COOKIE["access_token"];
            $headers[] = ("Authorization: Bearer ".$_COOKIE["access_token"]);
        }else{
            return redirect()->route('login');
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
        // dd($output);
        // dd($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // dd($ch);
        // close curl resource to free up system resources
        curl_close($ch);  
        // dd($output);
        $response = json_decode($output);
        dd($httpcode);

        if($httpcode == 401){
            return false;
        }else{
            return true;
        }
 
     }

}