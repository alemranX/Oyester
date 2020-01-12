<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome to CoralBusiness</title>

  <?php echo $__env->make('partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script src="<?php echo e(asset('js/slideshow/slideshow.js')); ?>"> </script>
</head>
<body>
<script src="<?php echo e(asset('js/slideshow/slideshow.js')); ?>"> </script>
  <div class="wrapper">

    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>


  <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /home/nahid/Desktop/Honey_Nut/resources/views/layouts/master.blade.php ENDPATH**/ ?>