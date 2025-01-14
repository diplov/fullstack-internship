<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome'); // A simple login form
});
Route::get('/user/{id}',function($id){
     $users=[
            1=>'john',
            2=>'jone',
            3=>'bob',
        ];
        if (array_key_exists($id,$users)) {
            return "User Id:".$id."-Name:".$users[$id];
        }
        else{
            return "user not found";
        }
});