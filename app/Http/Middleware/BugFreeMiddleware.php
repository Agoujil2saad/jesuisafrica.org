<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BugFreeMiddleware {

    public function handle($request, Closure $next) {
        $url = $request->path();

        if($request->is('register'))
        {
          
                abort('401');
      
        }

        if (($request->is('events/*/show')) or ($request->is('news/*/show')) or ($request->is('videos/*/show')))
         {
                    abort('401');
        }

  

   
        return $next($request);
    }
}