<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    public function loginview()
    {
        return view('login');
    }

    public function registerview()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'password' => 'required|string',
            'jeniskelamin' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,
            'api_key' => Str::random(60),
        ]);

        return redirect()->route('loginview')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if (is_null($user->api_key)) {
            $user->api_key = Str::random(60);
            $user->save();
        }

        // Simpan user_name dan api_key ke dalam session
        session(['user_name' => $user->name]);
        session(['api_key' => $user->api_key]);

        return redirect()->route('dashboard');
    }

    return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
}




    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginview');
    }
}
