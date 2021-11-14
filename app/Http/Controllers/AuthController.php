<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Register
    public function register(Request $request)
    {
        $fields = $request->validate([
            'vendorName' => 'required|string|unique:users',
            'email' => 'required|string|unique:users|email:dns',
            'password' => 'required',
            // 'vendorDescription' => 'string',
            // 'vendorPhone' => 'string',
            'vendorAddress' => 'string'
        ]);

        $user = User::create([
            'vendorName' => $fields['vendorName'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
            'vendorDescription' => null,
            'vendorPhone' => null,
            'vendorAddress' => $fields['vendorAddress']
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        // $response = [
        //     'user' => $user,
        //     'token' => $token
        // ];

        // return response($response, 201);
        return redirect('/login');
    }

    //Log in
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd('sukses');

        if (Auth::attempt($fields)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login failed!');

        // Check email
        // $user = User::where('email', $fields['email'])->first();

        //check password
        // if (!$user || !Hash::check($fields['password'], $user->password)) {
        //     return response([
        //         'message' => 'Incorrect account or password'
        //     ], 401);
        // }

        // $token = $user->createToken('myapptoken')->plainTextToken;

        // $response = [
        //     'user' => $user,
        //     'token' => $token
        // ];

        // return view('home');
    }

    //Log out
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
        // return [
        //     'massage' => 'Logged out'
        // ];
    }
}
