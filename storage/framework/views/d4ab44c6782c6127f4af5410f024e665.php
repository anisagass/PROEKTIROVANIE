

<?php $__env->startSection('header-title'); ?>
Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class ="hero">
        <div class ="hero-overlay">
            <h1>Добро пожаловать, чмо</h1>
            <p>Учиться програмированнию легко и удобно вместе с нами</p>
            <a href="#" class ="hero-btn">Начать</a>
        </div>
    </div>

    <div class="main-container">
        <div class="main-block">
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel natus id sint dignissimos asperiores alias modi repellendus facere quasi fugit nostrum, labore deleniti dolorum ipsa eum, quae expedita, architecto sapiente?</p>
        </div>
        
        <div> 
      <?php echo $__env->make('includes.aside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>  
    </div>
 
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/st11/example-app/resources/views/static/home.blade.php ENDPATH**/ ?>