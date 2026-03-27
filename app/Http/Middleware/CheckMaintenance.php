<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenance
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Setting::get('is_maintenance') === 'true' && ! $request->is('admin*') && ! auth()->check()) {
            return response()->view('errors.maintenance', [], 503);
        }

        return $next($request);
    }
}
