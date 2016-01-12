<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Input;

class AuthAdmin
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( ( ! empty( $this->auth->user() ) && $this->auth->user()->user_slug == Input::get('slug') ) || $this->auth->user()->sdc_role_id == 1 ){
            return $next($request);
        }else{
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/admin');
            }
        }    
    }
}
