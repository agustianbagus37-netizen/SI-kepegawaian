@csrf
<div class="mb-3">
    <label class="form-label">Departemen</label>
    <select name="department_id" class="form-select @error('department_id') is-invalid @enderror">
        <option value="">-- Pilih Departemen --</option>
        @foreach($departments as $department)
            <option value="{{ $department->id }}" @selected(old('department_id', $employee->department_id ?? '') == $department->id)>
                {{ $department->name }}
            </option>
        @endforeach
    </select>
    @error('department_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Nama Pegawai</label>
    <input type="text" name="name" value="{{ old('name', $employee->name ?? '') }}"
           class="form-control @error('name') is-invalid @enderror">
    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Jabatan</label>
    <input type="text" name="position" value="{{ old('position', $employee->position ?? '') }}"
           class="form-control @error('position') is-invalid @enderror">
    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Gaji</label>
    <input type="text" name="salary" value="{{ old('salary', isset($employee) ? (int) $employee->salary : '') }}"
           class="form-control @error('salary') is-invalid @enderror">
    @error('salary')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Tanggal Bergabung</label>
    <input type="date" name="joined_at"
           value="{{ old('joined_at', isset($employee) ? $employee->joined_at->format('Y-m-d') : '') }}"
           class="form-control @error('joined_at') is-invalid @enderror">
    @error('joined_at')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>
<button class="btn btn-primary">Simpan</button>
<a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
