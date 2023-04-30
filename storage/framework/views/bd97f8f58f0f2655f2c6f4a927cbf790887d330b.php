<!-- 
<?php $__env->startSection('content'); ?>
<div>
    this is posts
</div>
<?php $__env->stopSection(); ?> -->

<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-6">
                <p>first column</p>
            </div>
            <div class="col-6">
                <p>second column</p>
                <button class="btn btn-danger">Click</button>
            </div> 
        </div>
    </div>
</body>
</html>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\lessons\first_project\resources\views/posts.blade.php ENDPATH**/ ?>