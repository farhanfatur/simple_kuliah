@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kelas</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateKelas') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $kelas->id }}">
                    <h3>Change your Kelas</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Room</label>
                            <input type="text" name="room" class="form-control" value="{{ $kelas->room }}" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label>Name Dosen</label>
                            <select class="form-control" name="dosen" required>
                               
                                @foreach($dosen as $data)
                                    @if($kelas->dosen->id == $data->id)
                                        <option value="{{ $data->id }}" selected>{{ $data->name }}</option>
                                    @else
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mata Kuliah</label>
                            <select class="form-control" name="matkul" required>
                               
                                @foreach($matkul as $data)
                                    @if($kelas->matkul->id == $data->id)
                                        <option value="{{ $data->id }}" selected>{{ $data->name }}</option>
                                    @else
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                  
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
