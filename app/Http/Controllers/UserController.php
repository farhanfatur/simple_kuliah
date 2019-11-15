<?php


namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
	use AuthenticatesUsers;

    public function doLogin(Request $request)
    {	
    	if(auth()->guard('web')->attempt(['email' => $request->email, "password" => $request->password])) {
    		if(Auth::user()->position == 'admin') {
    			return redirect()->route('adminHome');
    		}else if(Auth::user()->position == 'siswa') {
    			dd("Anda masuk sebagai siswa");
    		}else if(Auth::user()->position == 'dosen') {
    			dd("Anda masuk sebagai dosen");
    		}

    	}else {
    		return redirect()->back()->withErrors(['username atau password anda salah']);
    	}
    }
}
