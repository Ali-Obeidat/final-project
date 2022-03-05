<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showLoginForm(){
      return  view('auth.admin_login');
    }
    public function login(Request $request){
    //    validate the form data;
       $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
       ]);
       
       if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password] , $request->remember)) {
           return redirect()->intended(route('admin'));
       }
       return back()->withInput($request->only('email', 'remember'));

    // $this->validateLogin($request);
    // if ($this->attemptLogin($request)) {
    //     if ($request->hasSession()) {
    //         $request->session()->put('auth.password_confirmed_at', time());
    //     }

    //     return $this->sendLoginResponse($request);
    // }
    // $this->incrementLoginAttempts($request);

    //     return $this->sendFailedLoginResponse($request);
    }
}
