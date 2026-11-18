
<?php $__env->startSection('title', 'Pegawai'); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
    <h4>Data Pegawai</h4>
    <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-primary">+ Tambah</a>
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
            <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($employee->id); ?></td>
                    <td><?php echo e($employee->name); ?></td>
                    <td><?php echo e($employee->department->name); ?></td>
                    <td><?php echo e($employee->position); ?></td>
                    <td>Rp <?php echo e(number_format($employee->salary, 0, ',', '.')); ?></td>
                    <td><?php echo e($employee->joined_at->format('d-m-Y')); ?></td>
                    <td>
                        <a href="<?php echo e(route('employees.edit', $employee)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('employees.destroy', $employee)); ?>" method="POST" class="d-inline"
                              onsubmit="return confirm('Hapus pegawai ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" class="text-center">Belum ada data.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3"><?php echo e($employees->links()); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kepegawaian\resources\views/employees/index.blade.php ENDPATH**/ ?>