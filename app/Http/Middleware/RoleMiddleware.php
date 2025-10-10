<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
 {
    /**
     * Handle an incoming request.
     *
      * @param  \Illuminate\Http\Request  $request
      * @param  \Closure  $next
      * @param  string  $role
      * @return mixed
      */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            $roleToRedirect = $roles[0] ?? 'user';
            return redirect()->route($roleToRedirect . '.login');
        }

        $userRole = Auth::user()->role;
        $roleMap = [
            'user' => 0,
            'staff' => 1,
            'admin' => 2,
        ];

        foreach ($roles as $role) {
            if (isset($roleMap[$role]) && $userRole == $roleMap[$role]) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
 }

 ?>
