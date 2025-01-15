<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function login(Request $request)
    {
        // Simulate login by storing user in session
        $users = [
            'admin@example.com' => ['email' => 'admin@example.com', 'role' => 'admin'],
            'employee@example.com' => ['email' => 'employee@example.com', 'role' => 'employee'],
        ];

        $email = $request->input('email');

        if (isset($users[$email])) {
            $request->session()->put('user', $users[$email]);
            return redirect('/home');
        }

        return redirect('/login')->withErrors(['email' => 'Invalid credentials']);
    }
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
