<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->isBan)
        {
            $banned = Auth::user()->isBan == "2";
            Auth::logout();

            if($banned == 2){
                $message = "Your account has been banned.";
            }
            return redirect()->route('login')
                ->with('status', $message)
                ->withErrors(['email' => 'Your account  has been banned.']);
        }
        return $next($request);
    }
}
