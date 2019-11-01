<?php

namespace App\Http\Middleware;

use Closure;

class Reception
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
      if(auth()->user()->isAdmin == 2){
        return $next($request);
        }
        return redirect('home')->with('error','Access Denied');
    }
}
