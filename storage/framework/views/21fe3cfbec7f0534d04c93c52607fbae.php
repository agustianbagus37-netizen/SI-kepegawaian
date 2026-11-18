<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Kepegawaian'); ?> - SI Kepegawaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('employees.index')); ?>">SI Kepegawaian</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('departments.index')); ?>">Departemen</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('employees.index')); ?>">Pegawai</a></li>
        </ul>
        <span class="navbar-text me-3"><?php echo e(auth()->user()->name); ?></span>
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button class="btn btn-sm btn-outline-light">Logout</button>
        </form>
    </div>
</nav>
<div class="container">
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH C:\laragon\www\kepegawaian\resources\views/layouts/app.blade.php ENDPATH**/ ?>