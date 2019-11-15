@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Take class</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeSiswaKelas') }}">
                        @csrf
                        <h3>Create your Class</h3>
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first()}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name Student</label>
                                <select class="form-control" name="idstudent" required>
                                    <option value="">Choose your name</option>
                                    @foreach($siswaes as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Class</label>
                                <select class="form-control" name="idclass" required>
                                    <option value="">Choose your Class</option>
                                    @foreach($kelas as $data)
                                        <option value="{{ $data->id }}">{{ $data->matkul->name }} - {{ $data->room }} - {{ $data->dosen->name }}</option>
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
