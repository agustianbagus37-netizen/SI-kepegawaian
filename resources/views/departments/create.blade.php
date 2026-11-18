@extends('layouts.app')
@section('title', 'Tambah Departemen')
@section('content')
<h4>Tambah Departemen</h4>
<div class="card"><div class="card-body">
    <form method="POST" action="{{ route('departments.store') }}">
        @include('departments._form')
    </form>
</div></div>
@endsection
