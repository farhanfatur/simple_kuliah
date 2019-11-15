@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Kelas</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeKelas') }}">
                    @csrf
                    <h3>Create your Kelas</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Room</label>
                            <input type="text" name="room" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label>Name Dosen</label>
                            <select class="form-control" name="dosen" required>
                                <option value="">Choose your Dosen</option>
                                @foreach($dosen as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mata Kuliah</label>
                            <select class="form-control" name="matkul" required>
                                <option value="">Choose your Mata Kuliah</option>
                                @foreach($matkul as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
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
