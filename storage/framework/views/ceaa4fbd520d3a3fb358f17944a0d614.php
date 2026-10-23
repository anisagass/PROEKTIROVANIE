

<?php $__env->startSection('header-title'); ?>
Страница контанты
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class = "main-container">  
    <div class="main-block">
        <h1>Contact Page</h1>
        <form action="<?php echo e(route('contact.post')); ?>" method="POST">
        <?php echo csrf_field(); ?> 

        <label for="name">Имя</label>
        <input type="text" placeholder = "Введите имя" name ="name" id="name" value ="<?php echo e(old('name')); ?>">

        <label for="email">Email</label>
        <input type="email" placeholder = "Введите email" name ="email" id="email" value ="<?php echo e(old('email')); ?>">

        <label for="subject">Тема сообщения</label>
        <input type="text" placeholder = "Введите тему сообщения" name ="subject" id="subject" value ="<?php echo e(old('subject')); ?>">

        <label for="massage">Сообщение</label>
        <textarea name="massage" id="massage" placeholder = "Введите сообщение"><?php echo e(old('message')); ?></textarea>

        <button type = "submit">Отправить</button>
        </form>
    </div>
<?php echo $__env->make('includes.aside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/st11/example-app/resources/views/static/contact.blade.php ENDPATH**/ ?>