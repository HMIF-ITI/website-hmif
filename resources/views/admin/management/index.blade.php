@extends('admin.layouts.app')

@section('title', 'Kepengurusan')

@section('content')

    <div class="container">
        <a href="/admin/management/create" class="btn btn-primary mb-3">Tambah Data</a>
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Departemen</th>
                        <th>Instagram</th>
                        <th>LinkedIn</th>
                        <th>Github</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($managements as $management)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $management->nama }}</td>
                            <td>{{ $management->jabatan }}</td>
                            <td>{{ $management->departemen }}</td>
                            <td>{{ $management->instagram }}</td>
                            <td>{{ $management->linkedin }}</td>
                            <td>{{ $management->github }}</td>
                            <td>
                                <img src="/image/{{ $management->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <a href="{{ route('management.edit', $management->id) }}" class="btn btn-warning">Edit</a>
                                <p></p>
                                <form action="{{ route('management.destroy', $management->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
