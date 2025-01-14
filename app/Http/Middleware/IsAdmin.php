<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->attributes->get('user');
    // dd("is admin",$user);
        if ($user['role'] !== 'admin') {
            return redirect('/home'); // Redirect if not admin
        }

        return $next($request);
    }
}

