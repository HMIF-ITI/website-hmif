@extends('admin.layouts.app')

@section('title', 'Tambah Kepengurusan')

@section('content')

    <div class="container">
        <a href="/admin/management" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('management.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                    </div>
                    @error('jabatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Departemen</label>
                        <input type="text" class="form-control" name="departemen" placeholder="Departemen">
                    </div>
                    @error('departemen')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                    </div>
                    @error('instagram')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">LinkedIn</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn">
                    </div>
                    @error('linkedin')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">GitHub</label>
                        <input type="text" class="form-control" name="github" placeholder="GitHub">
                    </div>
                    @error('github')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
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
