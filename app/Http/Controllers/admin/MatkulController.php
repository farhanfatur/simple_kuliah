<?php

namespace App\Http\Controllers\admin;

use App\Model\Matkul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MatkulController extends Controller
{
    public function index()
    {
    	$matkul = Matkul::paginate(5);
    	return view('admin.matkul', ['matkuls' => $matkul]);
    }

    public function store(Request $request)
    {
    	$matkul = new Matkul;
    	$matkul->name = $request->name;
    	$matkul->sks = $request->sks;
    	$matkul->cemester = $request->cemester;
    	$matkul->save();

    	return redirect()->route('indexMatkul');
    }

    public function edit($id)
    {
    	$matkul = Matkul::find($id);
    	return view('admin.matkul-edit', ['matkul' => $matkul]);
    }

     public function update(Request $request)
    {
    	$matkul = Matkul::find($request->id);
    	$matkul->name = $request->name;
    	$matkul->sks = $request->sks;
    	$matkul->cemester = $request->cemester;
    	$matkul->save();

    	return redirect()->route('indexMatkul');
    }

    public function delete($id)
    {
    	$matkul = Matkul::find($id);
    	$matkul->save();

    	return redirect()->route('indexMatkul');
    }
}
