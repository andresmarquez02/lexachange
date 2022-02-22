<?php

namespace App\Http\Middleware;
use Auth;
use Session;
use Closure;

class verifyAcount
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
        if(Auth::user()->email_verified_at)return $next($request);
        Auth::logout();
        session()->flush();
        return redirect("/login")->with("error","Verifica tu cuenta.");
    }
}
