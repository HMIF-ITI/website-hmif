@extends('admin.layouts.app')

@section('title', 'Edit Moment')

@section('content')

    <div class="container">
        <a href="/admin/moment" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('moment.update', $moment->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Divisi</label>
                        <input type="text" class="form-control" name="divisi" placeholder="Judul" value="{{ $moment->divisi }}">
                    </div>
                    @error('divisi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $moment->image }}" alt="img-fluid">
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
