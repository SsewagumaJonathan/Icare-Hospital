<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /**protected $redirectTo = RouteServiceProvider::HOME;*/
     protected function authenticated(Request $request,$user)
     {
         if( $user->is_admin == 1){
             return redirect ('admin');
         }
         if( $user->is_admin == 2 ){
            return redirect ('doctor');
         }
         if( $user->is_admin == 3 ){
            return redirect ('account');
         }
         if( $user->is_admin == 4 ){
            return redirect ('labaratorist');
         }
         return redirect ('login');

     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
