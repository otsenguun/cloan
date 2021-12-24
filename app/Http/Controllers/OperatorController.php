<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function dashboard(Request $request){
        return view("admin.operator.dashboard");
    }
    public function users(Request $request){
        return view("admin.operator.users");
    }
    public function user(Request $request){
        return view("admin.operator.user");
    }
    public function timeuploans(Request $request){
        return view("admin.operator.loans");
    }
}
