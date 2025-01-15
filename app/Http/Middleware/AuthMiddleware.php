<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    // Simulating authentication check
    public function handle(Request $request, Closure $next)
    {
        $user = $request->session()->get('user'); // Check if user is in session
        
        // dd("user",$user);
        if (!$user) {
            return redirect('/login'); // Redirect to login if not authenticated
            // return redirect()->route('login');
        }


    $request->attributes->add(['user' => $user]);

        // Attach the user to the request so we can use it in controllers

        return $next($request);
    }
      
}

