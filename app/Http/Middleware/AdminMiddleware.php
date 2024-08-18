<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminPanel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**
         *--------------------------------------------------------------------------
         * Get login user role 
         *--------------------------------------------------------------------------
         *
         **/

        $user = Auth::user();
        $roleName = $user->role?->name;

        /**
         *--------------------------------------------------------------------------
         * If user role name is not admin then throw exception
         *--------------------------------------------------------------------------
         *
         **/

        if ($roleName != 'admin') {
            return response()->json(['message' => 'Sorry! You have no permission to perform this action'], 404);
        }

        return $next($request);
    }
}
