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
    <!-- <div class="container">
        <div class="row">    
        <nav>
            <ul>
                <li><a href="<?php echo e(route('main.index')); ?>">Main</li>   
                <li><a href="<?php echo e(route('about.index')); ?>">About</li>
                <li><a href="<?php echo e(route('contact.index')); ?>">Contacts</li>
                <li><a href="<?php echo e(route('post.index')); ?>">Posts</li>
            </ul>
        </nav>
        <button class="btn btn-primary">Click</button>
        </div>
    </div> -->
 
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH D:\lessons\first_project\resources\views/layouts/main.blade.php ENDPATH**/ ?>