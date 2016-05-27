<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2016/05/27
 * Time: 12:40
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class JsonResponse
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        /** @var Response $response */
        $response = $next($request);
        if(is_array($response->getOriginalContent())){
            $originalContent =  $response->getOriginalContent();
            $originalContent["status"] = "OK";
            $response = \Illuminate\Http\JsonResponse::create($originalContent,200,[
                "X-ADDITIONAL-HEADER" => "LEC CAFE"
            ]);
        }
        return $response;
    }

}