<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')->orderBy('id')->paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        Employee::create($this->validated($request));
        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(Employee $employee)
    {
        $departments = Department::orderBy('name')->get();
        return view('employees.edit', compact('employee', 'departments'));
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($this->validated($request));
        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'department_id' => ['required', 'exists:departments,id'],
            'name'          => ['required', 'string', 'max:255'],
            'position'      => ['required', 'string', 'max:255'],
            'salary'        => ['required', 'numeric', 'gt:0'],
            'joined_at'     => ['required', 'date'],
        ], [
            'department_id.required' => 'Departemen harus dipilih.',
            'department_id.exists'   => 'Departemen yang dipilih tidak valid.',
            'name.required'          => 'Nama pegawai tidak boleh kosong.',
            'position.required'      => 'Jabatan tidak boleh kosong.',
            'salary.required'        => 'Gaji tidak boleh kosong.',
            'salary.numeric'         => 'Gaji harus berupa angka.',
            'salary.gt'              => 'Gaji harus lebih besar dari nol.',
            'joined_at.required'     => 'Tanggal bergabung tidak boleh kosong.',
            'joined_at.date'         => 'Tanggal bergabung harus berformat tanggal yang valid.',
        ]);
    }
}