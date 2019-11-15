<?php

namespace App\Http\Controllers\admin;

use App\Model\Matkul;
use App\Model\Dosen;
use App\Model\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function index()
    {
    	$kelas = Kelas::with('dosen', 'matkul')->paginate(5);
    	return view('admin.kelas', ['kelases' => $kelas]);
    }

    public function add()
    {
    	$matkul = Matkul::all();
    	$dosen = Dosen::all();
    	return view('admin.kelas-add', compact('matkul', 'dosen'));
    }

    public function store(Request $request)
    {
    	$kelas = new Kelas;
    	$kelas->room = $request->room;
    	$kelas->dosen_id = $request->dosen;
    	$kelas->matkul_id = $request->matkul;
    	$kelas->save();

    	return redirect()->route('indexKelas');
    }

    public function edit($id)
    {
    	$kelas = Kelas::with('dosen', 'matkul')->find($id);
    	$dosen = Dosen::all();
    	$matkul = Matkul::all();
    	return view('admin.kelas-edit', compact('kelas', 'dosen', 'matkul'));
    }

    public function update(Request $request)
    {
    	$kelas = Kelas::find($request->id);
    	$kelas->room = $request->room;
    	$kelas->dosen_id = $request->dosen;
    	$kelas->matkul_id = $request->matkul;
    	$kelas->save();

    	return redirect()->route('indexKelas');
    }

    public function delete($id)
    {
    	$kelas = Kelas::find($id);
    	$kelas->delete();

    	return redirect()->route('indexKelas');
    }
}
