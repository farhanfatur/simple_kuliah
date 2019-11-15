<?php

namespace App\Http\Controllers\admin;

use App\Model\User;
use App\Model\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function edit($id)
 	{
 		$siswa = Siswa::find($id);
 		return view('admin.siswa-edit', ['siswa' => $siswa]);
 	} 

 	public function update(Request $request)
 	{
 		$siswa = Siswa::find($request->id);
 		$siswa->name = $request->name;
 		$siswa->age = $request->age;
 		$siswa->gender = $request->gender;
 		$siswa->jurusan = $request->major;
 		$siswa->address = $request->address;
 		$siswa->birth = $request->birth;
 		$siswa->save();

 		return redirect()->route('indexSiswa');
 	}

 	public function delete($id)
 	{
 		$siswa = Siswa::find($id);
 		$siswa->delete();

 		return redirect()->route('indexSiswa');	
 	}

 	public function store(Request $request)
 	{
 		$siswa = new Siswa;
 		$siswa->name = $request->name;
 		$siswa->age = $request->age;
 		$siswa->gender = $request->gender;
 		$siswa->jurusan = $request->major;
 		$siswa->address = $request->address;
 		$siswa->birth = $request->birth;
 		$siswa->save();

 		return redirect()->route('indexSiswa');
 	}
}
