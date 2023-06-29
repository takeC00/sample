<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data = [
            ['name'=> 'taro', 'mail'=>'taro@yamada'],
            ['name'=> 'hanako', 'mail'=>'hanako@komachi'],
            ['name'=> 'yuuto', 'mail'=>'yuuto@yammaguchi'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
