<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // displaying users according to their id
    public function showById($id){
        $users=[
            1=>'john',
            2=>'jone',
            3=>'bob',
        ];
        if (isset($users[$id])) {
            return "User Id :" .$id . " User :".$users[$id];
        }
        else{
            return "user not found";
        }
    }
// for displaying users and id
    public function display(){
         $users=[
            1=>'john',
            2=>'jone',
            3=>'bob',
        ];
        $output="";
        foreach($users as $id=>$name){
            $output .= "User Id ".$id."-Name: ".$name. "<br>";
        }
        return $output;
    }
}
