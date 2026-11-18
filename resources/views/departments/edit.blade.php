@extends('layouts.app')
@section('title', 'Edit Departemen')
@section('content')
<h4>Edit Departemen</h4>
<div class="card"><div class="card-body">
    <form method="POST" action="{{ route('departments.update', $department) }}">
        @method('PUT')
        @include('departments._form')
    </form>
</div></div>
@endsection
