@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Matkul</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeMatkul') }}">
                    @csrf
                    <h3>Create your Mata Kuliah</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label>Sks</label>
                            <input type="number" name="sks" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Cemester</label>
                            <input type="number" name="cemester" class="form-control" required>
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
