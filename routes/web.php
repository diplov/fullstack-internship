<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/login', function () {
    return view('login'); // A simple login form
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Simulate login by storing user in session
    $users = [
        'admin@example.com' => ['email' => 'admin@example.com', 'role' => 'admin'],
        'employee@example.com' => ['email' => 'employee@example.com', 'role' => 'employee'],
    ];

    $email = $request->input('email');
    if (isset($users[$email])) {
        $request->session()->put('user', $users[$email]);
        // dump('session',$request->session()->all());
        return redirect('/home');
    }

    return redirect('/login')->withErrors(['email' => 'Invalid credentials']);
});

// Home route (accessible by both admin and employee)
Route::get('/home', function () {
    return view('home');
});

// Admin route (restricted to admins)
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth','is_admin']);

// Employee route (restricted to employees)
Route::get('/employee', [EmployeeController::class, 'index'])
    ->middleware(['auth', 'is_employee']);

