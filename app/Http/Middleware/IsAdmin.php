<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\component\HttpKernel\Exception\HttpExcept;

class IsAdmin
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
        //gebruiker ophalen uit de request
        $user = $request->user();
            if($user->is_admin == 1) {

                return $next($request);
            } else {
                return redirect()->route('home');
                throw new HttpException(403);
            }
    }
}
