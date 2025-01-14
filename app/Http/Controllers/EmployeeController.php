<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->attributes->get('user');
        return view('employee.dashboard', ['user' => $user]);
    }
}

