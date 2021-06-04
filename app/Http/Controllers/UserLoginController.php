<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use Session;


class UserLoginController extends Controller
{
    public function index()
    {
    	if (Session::has('siswaId')) {
    		return redirect('dashboardSiswa');
    	}
    	return view('user.login');
    }
    public function proses_login(Request $req)
    {
    	if (Session::has('userId')) {
    		return redirect('dashboard-siswa');
    	}
    	$siswa = Siswa::where('nisn', $req->username)->first();


    	if (!is_null($siswa)) {
    		if (Hash::check($req->password, $siswa->password)) {
    			// Membuat Sesi Baru
    			Session::put('siswaId', $siswa->nisn);
    			Session::put('siswa', $siswa->nama);

    			return redirect('/dashboardSiswa');
    		} else {
    			return redirect()->back()->with('error', 'Password Anda Salah');
    		}
    	} else {
    		return redirect()->back()->with('error', 'Data Tidak Ditemukan');
    	}
    }

    public function logout()
    {
    	if (Session::has('siswaId')) {
    		Session::forget('siswaId');
    		Session::forget('siswa');
    	}
    	return redirect('/user_login');
    }

    public function dashboard()
    {
        $nisn = (Session::get('siswaId'));
        $siswa = Siswa::where('nisn', $nisn)->first();
        return view('user.dashboard-siswa', [
            'siswa' => $siswa
        ]);
    }
}
