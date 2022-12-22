<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $local = session()->get('local',$request->get('local', config('app.locale')));
        if (in_array($local, locals())) {
            app()->setLocale($local);
            config(['app.locale' => $local]);
        }
        return $next($request);
    }
}
