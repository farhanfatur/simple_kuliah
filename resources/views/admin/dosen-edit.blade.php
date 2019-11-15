@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Dosen</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateDosen') }}">
                    @csrf
                    <h3>Change your Identity</h3>
                    <input type="hidden" name="id" value="{{ $dosen->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required autofocus value="{{ $dosen->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" value="{{ $dosen->age }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="">Choose your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $dosen->address }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Degree</label>
                            <input type="text" name="degree" class="form-control" value="{{ $dosen->degree }}" required>
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
