@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Ambil Kelas</div>
                @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                    @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary" onclick="window.location.href='/admin/siswakelas/add'">+ Take Class</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name Student</th>
                                        <th>Mata Kuliah</th>
                                        <th>Name Dosen</th>
                                        <th>Room</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($siswaes as $siswa)

                                    <tr>
                                        <td>{{ $siswa->id }}</td>
                                        <td>{{ $siswa->name }}</td>
                                        @if(count($siswa->kelas) != 0)
                                            <td>
                                                    <table>
                                                        @foreach($siswa->kelas as $kelas)
                                                            <tr>
                                                                <td>{{$kelas->matkul->name}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                              
                                            </td>
                                            <td>
                                             
                                                <table>
                                                    @foreach($siswa->kelas as $kelas)
                                                            <tr>
                                                                <td>{{$kelas->dosen->name}}</td>
                                                            </tr>
                                                    @endforeach
                                                </table>
                                         
                                            </td>
                                            <td>
                                               
                                                <table>
                                                    @foreach($siswa->kelas as $kelas)
                                                        <tr>
                                                            <td>{{$kelas->room}}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                              
                                            </td>
                                        @else
                                            <td colspan="3">Class are empty</td>
                                        @endif

                                        <td>
                                            <table>
                                                @foreach($siswa->kelas as $kelas)
                                                <tr>
                                                    <td><a href="siswakelas/edit/{{ $siswa->id }}/kelas/{{ $kelas->id }}">Edit</a> | <a href="siswakelas/delete/{{ $siswa->id }}/kelas/{{ $kelas->id }}">Delete</a></td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
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
