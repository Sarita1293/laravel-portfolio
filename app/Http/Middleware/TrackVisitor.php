<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Illuminate\Support\Str;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Store visitor information
        if (!$request->is('admin/*')) {

            $visitorToken = session()->get('visitor_token');

                if (!$visitorToken) {

                    $visitorToken = Str::uuid();

                    session([
                        'visitor_token' => $visitorToken
                    ]);


                    Visitor::create([
                        'visitor_token' => $visitorToken,

                        'ip_address' => $request->ip(),

                        'user_agent' => $request->userAgent(),

                        'browser' => $this->getBrowser($request->userAgent()),

                        'device' => $this->getDevice($request->userAgent()),

                        'page' => $request->path(),
                    ]);

                }
            }

        return $next($request);
    }

    private function getBrowser($userAgent)
    {
        if (str_contains($userAgent, 'Chrome')) {
            return 'Chrome';
        }

        if (str_contains($userAgent, 'Firefox')) {
            return 'Firefox';
        }

        if (str_contains($userAgent, 'Safari')) {
            return 'Safari';
        }

        return 'Unknown';
    }


    private function getDevice($userAgent)
    {
        if (str_contains($userAgent, 'Mobile')) {
            return 'Mobile';
        }

        return 'Desktop';
    }
}
