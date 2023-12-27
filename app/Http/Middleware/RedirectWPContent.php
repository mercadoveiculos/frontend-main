<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectWPContent
{
    public function handle(Request $request, Closure $next)
    {

        // Verifica se a URL começa com /mv/
        if ($request->is('wp-content/*')) {
            // Constrói a nova URL
            $newUrl = 'https://blog.mercadoveiculos.com' . $request->getRequestUri();

            // Redireciona para a nova URL
            return redirect($newUrl, 301); // 301 é o código de status para redirecionamento permanente
        }

        return $next($request);
    }
}
