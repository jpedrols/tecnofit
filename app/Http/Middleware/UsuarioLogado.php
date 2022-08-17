<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UsuarioLogado
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
        if(session()->get("logado")== "sim"){
            return $next($request);
        }else{
            return redirect()->route('inicio');
        }
    }
}
