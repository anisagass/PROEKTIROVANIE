<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('header-title'); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css' , 'resources/js/app.js']); ?>
</head>
<body>
    <header>
        <div class = "inner">
            <span class "logo">ItProgerApp</span>
                <nav>
                    <ul>
                        <li><a href="<?php echo e(route('home')); ?>">Главная</a></li>
                        <li><a href="<?php echo e(route('about')); ?>">Про нас</a></li>
                        <li><a href="<?php echo e(route('contact')); ?>">Контакты</a></li>
                    </ul>
                </nav>
        </div>
    
    </header>
    <div class = "content">
        <?php echo $__env->yieldContent('content'); ?> 
    </div> 
    
    <footer>
        Все права защищены
    </footer>
</body>
</html><?php /**PATH /home/st11/example-app/resources/views/layouts/main.blade.php ENDPATH**/ ?>