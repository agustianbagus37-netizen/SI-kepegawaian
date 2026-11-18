<?php echo csrf_field(); ?>
<div class="mb-3">
    <label class="form-label">Nama Departemen</label>
    <input type="text" name="name" value="<?php echo e(old('name', $department->name ?? '')); ?>"
           class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<button class="btn btn-primary">Simpan</button>
<a href="<?php echo e(route('departments.index')); ?>" class="btn btn-secondary">Batal</a>
<?php /**PATH C:\laragon\www\kepegawaian\resources\views\departments\_form.blade.php ENDPATH**/ ?>