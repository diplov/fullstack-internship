<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->attributes->get('user');
        return view('admin.dashboard', ['user' => $user]);
    }
   
}
