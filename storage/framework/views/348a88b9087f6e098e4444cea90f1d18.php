
<?php $__env->startSection('title', 'Departemen'); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
    <h4>Data Departemen</h4>
    <a href="<?php echo e(route('departments.create')); ?>" class="btn btn-primary">+ Tambah</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table table-striped mb-0">
            <thead><tr><th>#</th><th>Nama</th><th>Jumlah Pegawai</th><th width="180">Aksi</th></tr></thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($department->id); ?></td>
                    <td><?php echo e($department->name); ?></td>
                    <td><?php echo e($department->employees_count); ?></td>
                    <td>
                        <a href="<?php echo e(route('departments.edit', $department)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('departments.destroy', $department)); ?>" method="POST" class="d-inline"
                              onsubmit="return confirm('Hapus departemen ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4" class="text-center">Belum ada data.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="mt-3"><?php echo e($departments->links()); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kepegawaian\resources\views/departments/index.blade.php ENDPATH**/ ?>