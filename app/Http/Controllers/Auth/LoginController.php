<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    protected $redirectTo = '/admin'; // Đặt đường dẫn sau khi đăng nhập thành công

    // Override method authenticated to customize the redirect
    protected function authenticated($user)
    {
        if ($user->is_admin) {
            return redirect()->route('admin.index');
        }

        return redirect('/home');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
