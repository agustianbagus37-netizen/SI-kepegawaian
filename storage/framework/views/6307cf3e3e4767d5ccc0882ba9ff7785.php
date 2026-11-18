
<?php $__env->startSection('title', 'Tambah Pegawai'); ?>
<?php $__env->startSection('content'); ?>
<h4>Tambah Pegawai</h4>
<div class="card"><div class="card-body">
    <form method="POST" action="<?php echo e(route('employees.store')); ?>">
        <?php echo $__env->make('employees._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </form>
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kepegawaian\resources\views/employees/create.blade.php ENDPATH**/ ?>