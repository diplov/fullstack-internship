<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsEmployee
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->attributes->get('user');

        if ($user['role'] !== 'employee') {
            return redirect('/home'); // Redirect if not employee
        }

        return $next($request);
    }
}
