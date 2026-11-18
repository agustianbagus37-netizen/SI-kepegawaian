@extends('layouts.app')
@section('title', 'Departemen')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Data Departemen</h4>
    <a href="{{ route('departments.create') }}" class="btn btn-primary">+ Tambah</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-striped mb-0">
            <thead><tr><th>#</th><th>Nama</th><th>Jumlah Pegawai</th><th width="180">Aksi</th></tr></thead>
            <tbody>
            @forelse($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->employees_count }}</td>
                    <td>
                        <a href="{{ route('departments.edit', $department) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('departments.destroy', $department) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Hapus departemen ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">Belum ada data.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">{{ $departments->links() }}</div>
@endsection
