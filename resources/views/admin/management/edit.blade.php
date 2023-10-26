@extends('admin.layouts.app')

@section('title', 'Edit Kepengurusan')

@section('content')

    <div class="container">
        <a href="/admin/management" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('management.update', $management->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $management->nama }}">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="{{ $management->jabatan }}">
                    </div>
                    @error('jabatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Departemen</label>
                        <input type="text" class="form-control" name="departemen" placeholder="Departemen" value="{{ $management->departemen }}">
                    </div>
                    @error('departemen')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{ $management->instagram }}">
                    </div>
                    @error('instagram')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">LinkedIn</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" value="{{ $management->linkedin }}">
                    </div>
                    @error('linkedin')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">GitHub</label>
                        <input type="text" class="form-control" name="github" placeholder="GitHub" value="{{ $management->github }}">
                    </div>
                    @error('github')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $management->image }}" alt="img-fluid">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    @error('image')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-gorup">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
