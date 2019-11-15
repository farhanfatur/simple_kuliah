<?php

namespace App\Http\Controllers\admin;

use App\Model\Matkul;
use App\Model\Siswa;
use App\Model\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaKelasController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::with('kelas')->paginate(5);
    	return view('admin.siswakelas', ['siswaes' => $siswa]);
    }

    public function add()
    {
    	$kelas = Kelas::all();
    	$siswaes = Siswa::all();
    	return view('admin.siswakelas-add', compact('kelas', 'siswaes'));
    }

    public function store(Request $request)
    {
    	$siswa = Siswa::find($request->idstudent);
    	if(count($siswa->kelas) == 0) {
    		$student = Siswa::find($request->idstudent);
			$student->kelas()->attach($request->idclass);

			return redirect()->route('indexSiswaKelas');
    	}else {
    		foreach($siswa->kelas as $data) {
				if($data->pivot->siswa_id == $request->idstudent && $data->id == $request->idclass) {
					return redirect()->back()->withErrors(['Anda sudah memilih kelas dengan mata kuliah yang sama sebelumnya']);
					break;
				}else {
					$student = Siswa::find($request->idstudent);
					$student->kelas()->attach($request->idclass);

					return redirect()->route('indexSiswaKelas');
					break;
				}
			}
    	}
    }
}

