<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    
    public function wallet(Request $request){

        return view('admin.pages.wallet.wallet')->render();
       
    }

    public function walletIncome(Request $request){

        return view('admin/wallet/income');

    }
    public function walletOutcome(Request $request){

        return view('admin/wallet/outcome');

    }
    public function walletHistory(Request $request){

        return view('admin.pages.wallet.history');

    }

}
