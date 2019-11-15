@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kelas</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" onclick="window.location.href='/admin/kelas/add'">+ Dosen</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>room</th>
                                        <th>Name Dosen</th>
                                        <th>Mata Kuliah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kelases as $kelas)
                                      <tr>
                                          <td>{{ $kelas->id }}</td>
                                          <td>{{ $kelas->room }}</td>
                                          <td>{{ $kelas->dosen->name }}</td>
                                          <td>{{ $kelas->matkul->name }}</td>
                                          <td><a href="kelas/edit/{{ $kelas->id }}">Edit</a> | <a href="kelas/delete/{{ $kelas->id }}">Delete</a></td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $kelases->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
