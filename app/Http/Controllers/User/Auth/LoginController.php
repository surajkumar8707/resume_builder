<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showUserLoginForm()
    {
        try {
            return view('user.auth.login');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try {

            $credentials = $request->only('email', 'password');
            // dd($credentials, $request->all());

            if (Auth::attempt($credentials)) {
                return redirect()->intended('/dashboard');
            }
            return redirect()->back()->with('auth_error', 'Invalid credentials. Please try again.');

            // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            //     return redirect()->intended('/admin/dashboard');
            // }
            // return back()->withInput($request->only('email', 'remember'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function showUserRegisterForm()
    {
        try {
            return view('user.auth.register');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function userRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            if ($user) {
                Auth::login($user);
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->back()->with('auth_error', 'Something went wrong, Please try again.');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function userLogout()
    {
        try {
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
