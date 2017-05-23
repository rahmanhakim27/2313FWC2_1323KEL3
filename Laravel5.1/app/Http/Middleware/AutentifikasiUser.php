<?php

namespace App\Http\Middleware;

use Closure;

class AutentifikasiUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $auth;

    public function __construct(){
        $this->auth = app('auth');
    }
    
    public function handle($request, Closure $next, $cek){

        if($this->auth->check() && !auth()->user()->loginlevel($cek)){
            return redirect('/login');
        }
        return $next($request);
    }
}
