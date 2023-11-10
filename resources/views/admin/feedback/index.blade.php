@php
    use Carbon\Carbon;
@endphp

@extends('admin.layouts.app')

@section('title', 'Feedback')

@section('content')

    <div class="container">
        {{-- <a href="/admin/moment/create" class="btn btn-primary mb-3">Tambah Data</a> --}}
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($feedbacks as $feedback)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $feedback->name }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>{{ $feedback->message }}</td>
                            {{-- <td>{{ $feedback->created_at }}</td> --}}
                            <td>{{ Carbon::parse($feedback->created_at)->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
