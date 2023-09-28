<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|min:10',
            'name' => 'required|min:4',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
            'telp' => 'required|min:11',
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['level'] = 'Pegawai';

        if(empty($validated)){
            return back()->with('error', 'Data anda inputkan kosong, silahkan inputkan lagi!');
        }else{

            $checknip = User::where('nip', $validated['nip'])->first();
            $checkemail = User::where('email', $validated['email'])->first();

            if ($checkemail) {
                return back()->with('error', 'E-mail sudah tersedia!');
            }elseif ($checknip) {
                return back()->with('error', 'Nip sudah tersedia!');
            }
            else{

                User::create($validated);
                return redirect('/')->with('success','Akun berhasil dibuat!');

            }

        }
    }
}
