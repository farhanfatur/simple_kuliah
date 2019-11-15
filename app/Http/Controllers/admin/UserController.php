<?php

namespace App\Http\Controllers\admin;

use App\Model\Siswa;
use App\Model\Matkul;
use App\Model\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
 	public function index()
 	{
 		$siswa = Siswa::paginate(5);
 		return view('admin.siswa', ['siswaes' => $siswa]);
 	} 

 	
}
