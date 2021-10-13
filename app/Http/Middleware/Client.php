<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Client
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
        $client = Role::where('code_role', 'CL')->first();
        if (Auth::user() &&  Auth::user()->role_id == $client->id) {
            return $next($request);
        }

        return redirect('login');
    }
}
