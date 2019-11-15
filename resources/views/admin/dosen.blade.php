@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Dosen</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" onclick="window.location.href='/admin/dosen/add'">+ Dosen</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Degree</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dosens as $dosen)
                                        <tr>
                                            <td>{{ $dosen->id }}</td>
                                            <td>{{ $dosen->name }}</td>
                                            <td>{{ $dosen->age }}</td>
                                            <td>{{ $dosen->gender }}</td>
                                            <td>{{ $dosen->degree }}</td>
                                            <td>{{ $dosen->address }}</td>
                                            <td><a href="dosen/edit/{{ $dosen->id }}">Edit</a> | <a href="dosen/delete/{{ $dosen->id }}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $dosens->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
