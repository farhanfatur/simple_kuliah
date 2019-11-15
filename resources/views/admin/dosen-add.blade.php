@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Dosen</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeDosen') }}">
                    @csrf
                    <h3>Create your Identity</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control" required>
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
                            <input type="text" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Degree</label>
                            <input type="text" name="degree" class="form-control" required>
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
