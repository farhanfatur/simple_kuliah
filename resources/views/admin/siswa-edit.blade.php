@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Siswa</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateSiswa') }}">
                    @csrf
                    <h3>Change your Identity</h3>
                    <input type="hidden" name="id" value="{{ $siswa->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required autofocus value="{{ $siswa->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" value="{{ $siswa->age }}" required>
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
                            <label>Major</label>
                             <select class="form-control" name="major" required>
                                <option value="">Choose your Major</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Perikanan">Perikanan</option>
                                <option value="Perhewanan">Perhewanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $siswa->address }}" required>
                        </div>
                        <div class="col-md-6">
                            <label>Date of Birth</label>
                            <input type="date" name="birth" class="form-control" value="{{ $siswa->birth }}" required>
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
