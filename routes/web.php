<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('lang',[HomeController::class,'setlng']);
// Route::get('/',[HomeController::class,'home']);
Route::get('/Loan',[HomeController::class,'loan'])->middleware("auth2");

Route::get('/wallet',[WalletController::class,'wallet'])->middleware("auth2");
Route::get('/wallet/income',[WalletController::class,'walletIncome'])->middleware("auth2");
Route::get('/wallet/outcome',[WalletController::class,'walletOutcome'])->middleware("auth2");
Route::get('/wallet/history',[WalletController::class,'walletHistory'])->middleware("auth2");
// Route::get('/show_product_info/{id}',[HomeController::class,'show_product']);

Route::get('/',[AdminController::class,'home']);
Route::get('/dashboard',[AdminController::class,'dashboard'])->middleware("auth2");

Route::get('/confirm',[HomeController::class,'confirm'])->middleware("auth2");

Route::get('/user_details_org',[HomeController::class,'user_details_org'])->middleware("auth2");
Route::get('/create_loan',[LoanController::class,'create'])->middleware("auth2");
Route::get('/calculateLoaner',[LoanController::class,'calculateLoaner'])->middleware("auth2");
Route::get('/create_loaner',[LoanController::class,'createLoaner'])->middleware("auth2");


Route::get('/dans',[LoanController::class,'dans'])->middleware("auth2");
Route::get('/Loanhistory',[LoanController::class,'historyLoan'])->middleware("auth2");


Route::get('/dashboard2',[MasterController::class,'dashboard']);
Route::get('/users',[MasterController::class,'users'])->middleware("auth2");
Route::get('/user/{id}',[MasterController::class,'user'])->middleware("auth2");


Route::get('/total_orders',[MasterController::class,'total_orders'])->middleware("auth2");
// Route::get('/storeLend',[LoanController::class,'total_orders']);


//admin
Route::get('/logout2',[UserController::class,'logout'])->middleware("auth2");
Route::get('/showUsers',[AdminController::class,'showUsers'])->middleware("auth2");
Route::post('/approve_user',[MasterController::class,'approve'])->middleware("auth2");
Route::get('/insertRate',[MasterController::class,'insertRate'])->middleware("auth2");
Route::post('/storeRate',[MasterController::class,'storeRate'])->middleware("auth2");

//user
Route::post('/login2',[UserController::class,'login']);
Route::post('/register2',[UserController::class,'register']);
Route::get('/changePassword',[UserController::class,'changePass'])->middleware("auth2");
Route::post('/changePassword',[UserController::class,'changePassword'])->middleware("auth2");
Route::get('/email_confirm',[UserController::class,'emailconfirm'])->middleware("auth2");
Route::get('/email_confirm_token',[UserController::class,'emailconfirmToken'])->middleware("auth2");
Route::post('/email_confirm',[UserController::class,'emailConfirmSubmit'])->middleware("auth2");

Route::get('/home',[AdminController::class,'admin'])->middleware("auth2");
Route::get('/me',[UserController::class,'me'])->middleware("auth2");
Route::get('/user_details',[UserController::class,'user_details'])->middleware("auth2");
Route::post('/user_details_update',[UserController::class,'user_details_update'])->middleware("auth2");
Route::get('/health',[UserController::class,'health'])->middleware("auth2");


Route::post('/CalculateOrderBorrow  ',[LoanController::class,'storeCalculate'])->middleware("auth2");
Route::get('/orderBorrowConfirm/{id}  ',[LoanController::class,'store'])->middleware("auth2");
Route::get('/orderLendConfirm/{id}  ',[LoanController::class,'storeLoaner'])->middleware("auth2");

Route::get('/orderBorrowCancel/{id}  ',[LoanController::class,'BorrowCancel'])->middleware("auth2");
Route::get('/orderLendCancel/{id}  ',[LoanController::class,'LendCancel'])->middleware("auth2");


Route::post('/orderLend ',[LoanController::class,'storeLoaner'])->middleware("auth2");
Route::get('/coming_soon ',[LoanController::class,'coming_soon'])->middleware("auth2");

Route::get('/get_last_curr ',[AdminController::class,'get_last_curr'])->middleware("auth2");

//operator
// Route::get('/home',[AdminController::class,'admin'])->middleware("auth2");



// Route::get('/dashboard2',[MasterController::class,'dashboard']);
// Route::get('/users',[MasterController::class,'users']);
// Route::get('/user',[MasterController::class,'user']);
Route::get('/timeuploans',[OperatorController::class,'timeuploans']);
