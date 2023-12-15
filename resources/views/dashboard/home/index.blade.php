@extends('dashboard.layouts.main')

@section('main-body')
{{-- <h1>Ini adalah halaman Dashboard!</h1> --}}

<div class="alert alert-success" role="alert">
    Welcome to Database, {{ auth()->user()->nama }}!
</div>

  
@endsection
