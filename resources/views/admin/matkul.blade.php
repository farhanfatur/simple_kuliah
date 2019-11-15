@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mata kuliah</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" onclick="window.location.href='/admin/matkul/add'">+ Matkul</button>
                        </div>
                    </div>
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th><th>Name</th><th>Sks</th><th>Cemester</th><th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matkuls as $matkul)
                            <tr>
                                <td>{{ $matkul->id }}</td>
                                <td>{{ $matkul->name }}</td>
                                <td>{{ $matkul->sks }}</td>
                                <td>{{ $matkul->cemester }}</td>
                                <td><a href="matkul/edit/{{ $matkul->id }}">Edit</a> | <a href="matkul/delete/{{ $matkul->id }}">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $matkuls->links() }}
                       
                </div>
            </div>
        </div>
    </div>

@endsection
