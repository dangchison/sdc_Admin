<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginBackend;
use App\Http\Controllers\Controller;
use Input, Session, Auth;

class BackendLoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::check() ){
            return redirect()->intended('admin/dashboard');
        }
        return view('backend.sdc_login');
    }

    public function handleLogin(LoginBackend $request){

        $email = $request->email;
        $password = $request->password;

        if ( Auth::attempt( [ 'email' => $email, 'password' => $password, 'sdc_role_id' => 1, 'user_published' => 1 ] ) ){
            return redirect()->route('B.dashboard');
        }

        if ( Auth::attempt( [ 'email' => $email, 'password' => $password, 'sdc_role_id' => 2, 'user_published' => 1 ] ) ){
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->intended('admin')->with('message','Do not found account !');
    }

    public function handleLogout(){
        Auth::logout();
        Session::flush();        
        return redirect()->route("B.login");
    }

}
