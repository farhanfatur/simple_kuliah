@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Siswa</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" onclick="window.location.href='/admin/siswa/add'">+ Siswa</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Major</th><th>birth</th><th>Address</th><th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswaes as $siswa)
                                    <tr>
                                        <td>{{ $siswa->id }}</td>
                                        <td>{{ $siswa->name }}</td>
                                        <td>{{ $siswa->age }}</td>
                                        <td>{{ $siswa->gender }}</td>
                                        <td>{{ $siswa->jurusan }}</td>
                                        <td>{{ $siswa->birth }}</td>
                                        <td>{{ $siswa->address }}</td>
                                        <td><a href="siswa/edit/{{ $siswa->id }}">Edit</a> | <a href="siswa/delete/{{ $siswa->id }}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $siswaes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
