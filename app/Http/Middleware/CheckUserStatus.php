<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // dd($user) ;

        if ($user && $user->status === 'pending') {
            return redirect()->route('pending') ;
        }

        if ($user && $user->status === 'inactive') {
            return redirect()->route('locked') ;
        }

        return $next($request);
     }
}
