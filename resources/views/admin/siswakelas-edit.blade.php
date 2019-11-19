@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit class</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateSiswaKelas') }}">
                        @csrf
                        <h3>Edit your Class</h3>
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first()}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name Student</label>
                                <select class="form-control" name="idstudent" required>
                                    <option value="{{ $siswa->id }}">{{ $siswa->name }}</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Class</label>
                                <select class="form-control" name="idclass" required>
                                    @foreach($kelases as $data)
                                            @if($data->id == $kelas->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->room }} - {{ $data->matkul->name }} - {{ $data->dosen->name }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->room }} - {{ $data->matkul->name }} - {{ $data->dosen->name }}</option>
                                            @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
