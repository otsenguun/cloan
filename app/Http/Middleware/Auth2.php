<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
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
        // dd($response);
        

        if($httpcode == 401){
            return redirect()->route('login');
        }else{
            setcookie("user_role", json_encode($response->roles));
            setcookie("user_name", json_encode($response->username));
            return $next($request);
        }
        
    }
}
