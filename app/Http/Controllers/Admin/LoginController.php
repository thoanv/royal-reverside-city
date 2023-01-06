<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.auths.login');
        }
        $credentials = $request->only(['username', 'password']);
        $credentials['status'] = 1;
        $remember = (bool)$request['remember'];
        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.login'));
    }
}
