<?php

namespace App\Http\Controllers;

use App\Models\ModelAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    // Menampilkan form login admin
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin-index');
        } else {
            return view('admin-login');
        }
    }

    public function actionlogin(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => strtolower(trim($request->email)),
            'password' => $request->password
        ];

        Log::info('Attempting login with credentials: ', $credentials);

        // Cek kredensial
        if (Auth::guard('admin')->attempt($credentials)) {
            Log::info('Login successful for user: ' . $request->email);
            // dd('hhh');
            return redirect()->route('admin-index');
        } else {
            Log::error('Login failed for user: ' . $request->email);
            Session::flash('error', 'Email atau Password salah');
            return redirect()->route('login');
        }
    }


    // Proses logout
    public function actionlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    // Proses signup
    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:tb_admin,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        try {
            // Buat admin baru (password akan otomatis di-hash oleh mutator di ModelAdmin)
            ModelAdmin::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password,  // Tidak perlu di-hash lagi di sini
            ]);

            // Flash pesan sukses
            Session::flash('success', 'Admin berhasil didaftarkan!');
            return redirect()->route('login');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal mendaftarkan admin');
            return redirect()->back();
        }
    }
}
