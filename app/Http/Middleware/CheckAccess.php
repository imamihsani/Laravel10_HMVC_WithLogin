<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAccess
{
    public function handle(Request $request, Closure $next)
    {
        $allowedForGuests = ['login', 'home']; // Tambahkan 'home' di sini

        if (auth()->check()) {
            // Blok akses /login jika sudah login
            if ($request->is('login')) {
                return redirect()->route('profile');
            }
        } else {
            // Blok semua route kecuali /login dan /home
            if (!$request->is($allowedForGuests)) {
                return redirect()->route('login');
            }
        }

        return $next($request);
    }
}