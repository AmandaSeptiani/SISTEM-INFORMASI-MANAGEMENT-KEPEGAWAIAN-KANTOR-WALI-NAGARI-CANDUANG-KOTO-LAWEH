<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.reset.index');
    }

    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();

        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('/recover');
        }

        return back()->with('error', 'Email not found or incorrect!');
    }

    public function recover()
    {
        return view('pegawai.reset.recover');
    }

    public function recoverpassword(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5',
        ]);

        $email = $request->input('email');
        $newPassword = $request->input('password');

        $user = User::where('email', $email)->first();
        
        if (!$user) {
            return back()->with('error', 'Email not found');
        }

        $user->password = Hash::make($newPassword);
        $user->save();

        Auth::logout();
        $request->session()->invalidate();
        return redirect('/')->with('success', 'Password updated successfully');
    }



   
}
