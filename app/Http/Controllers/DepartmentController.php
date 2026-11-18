<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::withCount('employees')->orderBy('id')->paginate(10);
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        Department::create($this->validated($request));
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil ditambahkan.');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $department->update($this->validated($request));
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil diperbarui.');
    }

    public function destroy(Department $department)
    {
        if ($department->employees()->exists()) {
            return redirect()->route('departments.index')
                ->with('error', "Departemen \"{$department->name}\" tidak dapat dihapus karena masih memiliki pegawai.");
        }

        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate(
            ['name' => ['required', 'string', 'max:255']],
            ['name.required' => 'Nama departemen tidak boleh kosong.']
        );
    }
}