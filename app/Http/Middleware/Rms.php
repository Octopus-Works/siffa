<?php

namespace App\Http\Middleware;
use TCG\Voyager\Models\Role;
use Closure;

class Rms 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $role = Role::where('name', 'RMS')->firstOrFail();

        if ( auth()->user()->role_id == $role->id){
            return $next($request);
        }
        
        return redirect('/')->with('error', 'You do not have RMS privilage!'); 
    }
}
