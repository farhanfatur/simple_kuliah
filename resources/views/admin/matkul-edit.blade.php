@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Matkul</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateMatkul') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $matkul->id }}">
                    <h3>Create your Mata Kuliah</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $matkul->name }}" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label>Sks</label>
                            <input type="number" name="sks" class="form-control" value="{{ $matkul->sks }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Cemester</label>
                            <input type="number" name="cemester" class="form-control" value="{{ $matkul->cemester }}" required>
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
