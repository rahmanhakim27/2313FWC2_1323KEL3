<?php

namespace App\Http\Middleware;

use Closure;

class autadmin
{

    private $auth;
    public function __construct()
    {
            $this->auth = app('auth');
            
        } 
            public function handle($request, Closure $next)        
        {
            if($this->auth->check()){
                return $next($request);
            }
            return redirect('login')->withErrors('silahkan login');
        }
    }
