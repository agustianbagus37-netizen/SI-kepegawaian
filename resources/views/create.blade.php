@extends('layouts.app')
@section('title', 'Tambah Pegawai')
@section('content')
<h4>Tambah Pegawai</h4>
<div class="card"><div class="card-body">
    <form method="POST" action="{{ route('employees.store') }}">
        @include('employees._form')
    </form>
</div></div>
@endsection