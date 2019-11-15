<?php

namespace App\Http\Controllers\admin;

use App\Model\Dosen;
use App\Model\Matkul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
  	public function index()
  	{
  		$dosen = Dosen::paginate(5);
  		return view('admin.dosen', ['dosens' => $dosen]);
  	}

  	public function edit($id)
  	{
  		$dosen = Dosen::find($id);
  		return view('admin.dosen-edit', ['dosen' => $dosen]);
  	}

  	public function update(Request $request)
  	{
  		$dosen = Dosen::find($request->id);
  		$dosen->name = $request->name;
  		$dosen->age = $request->age;
  		$dosen->gender = $request->gender;
  		$dosen->address = $request->address;
  		$dosen->lesson = $request->lesson;
  		$dosen->degree = $request->degree;
  		$dosen->save();

  		return redirect()->route('indexDosen');
  	}

  	public function store(Request $request)
  	{
  		$dosen = new Dosen;
  		$dosen->name = $request->name;
  		$dosen->age = $request->age;
  		$dosen->gender = $request->gender;
  		$dosen->address = $request->address;
  		$dosen->lesson = $request->lesson;
  		$dosen->degree = $request->degree;
  		$dosen->save();

  		return redirect()->route('indexDosen');
  	}

  	public function delete($id)
  	{
  		$dosen = Dosen::find($id);
  		$dosen->delete();

  		return redirect()->route('indexDosen');	
  	}
}
