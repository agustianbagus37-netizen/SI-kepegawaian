@extends('layouts.app')
@section('title', 'Edit Pegawai')
@section('content')
<h4>Edit Pegawai</h4>
<div class="card"><div class="card-body">
    <form method="POST" action="{{ route('employees.update', $employee) }}">
        @method('PUT')
        @include('employees._form')
    </form>
</div></div>
@endsection
