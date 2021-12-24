<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $main_url = "https://d2dyd4ittdzdji.cloudfront.net/apib-a"; 
        $sub_url = "/user/me";
        $headers =  ['Content-Type: application/x-www-form-urlencoded'];

        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $main_url.$sub_url);

        if(isset($_COOKIE["access_token"])){
            $token = $_COOKIE["access_token"];
            $headers[] = ("Authorization: Bearer ".$_COOKIE["access_token"]);

        }else{
            // dd("sdasd");
            return route('login');
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
        // dd($httpcode);
       
        if($httpcode == 401){
            return route('login');
        }else{
            // dd($request);
            // if()
            // return "/home";
        }

    }
}
