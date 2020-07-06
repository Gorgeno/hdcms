<?php

namespace App\Http\Middleware;

use Closure;

class SiteMiddleware
{
  public function handle($request, Closure $next)
  {
    config(['site' => site()->config]);

    return $next($request);
  }
}
