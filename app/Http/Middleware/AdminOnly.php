<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->admin) {
            return $next($request);
        }

        $request->session()->invalidate();
        return redirect('/')
            ->with('successes', 'غير مصرح لك بالدخول إلى لوحة التحكم ✖️');
    }
}
