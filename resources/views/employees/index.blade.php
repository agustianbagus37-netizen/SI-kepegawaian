@extends('layouts.app')
@section('title', 'Pegawai')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Data Pegawai</h4>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">+ Tambah</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>#</th><th>Nama</th><th>Departemen</th><th>Jabatan</th>
                    <th>Gaji</th><th>Bergabung</th><th width="180">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->department->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>Rp {{ number_format($employee->salary, 0, ',', '.') }}</td>
                    <td>{{ $employee->joined_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Hapus pegawai ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">Belum ada data.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3">{{ $employees->links() }}</div>
@endsection
