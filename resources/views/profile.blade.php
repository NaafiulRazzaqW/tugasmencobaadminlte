@extends('layout.layout')

@section('title', $data['nama'])

@section('content')

<div class="card mt-3">
    <div class="card-header">
      <h3 class="card-title">Profile dari {{ $data['nama'] }}</h3>
      <div class="card-tools">
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <h3>Nama Lengkap : {{ $data['nama'] }}</h3>
      <h3>NIM : {{ $data['nim'] }}</h3>
      <h3>Kelas : {{ $data['kelas'] }}</h3>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Profile
    </div>
    <!-- /.card-footer -->
  </div>
    
@endsection