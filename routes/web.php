<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\formcontroller;
use App\Models\Customer;
use App\Http\Controllers\custcontroller;
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

Route::get('/', function () {
    return view('hello');
});


//I defined for practice with passing data

Route::get('/demo/{id}/{name?}',function($id,$name=null){
    echo $name."<br>".$id;
    $city="<h2><i>surat</i></h2>";
    $data = compact('id','name','city');   //to bind id and name into single array 'data'
    return view('welcome')->with($data);
});

Route::get("controller",[democontroller::class,'index']);

Route::view("users","users");


//form
Route::view("form","form");
Route::post('form',[formcontroller::class,'getdata']);


//customer table
Route::get('/customer',function(){
    $cust = Customer::all();
    echo "<pre>";
    print_r($cust->toArray());
});


//cust form
Route::get('customer/customer', [custcontroller::class,'index']);  //to open cust form

//insertion
Route::post('customer/custform',[custcontroller::class,'store']);    //t0 get form data in controller to store in database with post method

//selection
Route::get('customer/view', [custcontroller::class,'view']);  //to open cust form
Route::view('customer/home','home');

//deletion
Route::get('customer/delete/{id}',[custcontroller::class,'delete']);

//update
Route::get('customer/edit/{id}',[custcontroller::class,'edit'])->name('customer.edit');
Route::get('customer/update/{id}',[custcontroller::class,'update'])->name('customer.update');


