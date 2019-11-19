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
        $kelas = Kelas::find($request->idclass);
        $dataKelas = $siswa->kelas->toArray();
        $key = array_search($kelas->matkul_id, array_column($dataKelas, 'matkul_id'));
    	if(count($siswa->kelas) == 0) {
    		$student = Siswa::find($request->idstudent);
			$student->kelas()->attach($request->idclass);

			return redirect()->route('indexSiswaKelas');
    	}else {
    		foreach($siswa->kelas as $data) {
				if($data->pivot->siswa_id == $request->idstudent && $key == 1) {

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

    public function edit($id, $idKelas)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::find($idKelas);
        $kelasAll = Kelas::all();
        return view('admin.siswakelas-edit', ['siswa' => $siswa, 'kelases' => $kelasAll, 'kelas' => $kelas]);
    }

    public function update(Request $request)
    {
        $siswa = Siswa::find($request->idstudent);
        $kelas = Kelas::find($request->idclass);
        $dataKelas = $siswa->kelas->toArray();
        $key = array_search($kelas->matkul_id, array_column($dataKelas, 'matkul_id'));
            foreach($siswa->kelas as $data) {
                if($data->pivot->siswa_id == $request->idstudent && $key == 1) {

                    return redirect()->back()->withErrors(['Anda sudah memilih kelas dengan mata kuliah yang sama sebelumnya']);
                    break;
                }else {
                    $data->pivot->kelas_id = $request->idclass;
                    $data->pivot->save();

                    return redirect()->route('indexSiswaKelas');
                    break;
                }
            }
        
    }

    public function delete($id, $idclass)
    {
        $siswa = Siswa::find($id);
        if(count($siswa->kelas) == 0) {
            return redirect()->back()->withErrors(['Tidak bisa dihapus, kelas kosong']);
        }else {
             $siswa->kelas()->detach($idclass);
             return redirect()->back();
        }
       
    }
}

