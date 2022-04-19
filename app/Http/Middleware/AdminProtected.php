<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminProtected
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if (session('userid')!="" AND session('code')=="admin") {
         return $next($request);  
       }
       else{ 
       	session()->flash('data','You are not authorize user');
           return redirect("/login");
       }
    }
    
}
