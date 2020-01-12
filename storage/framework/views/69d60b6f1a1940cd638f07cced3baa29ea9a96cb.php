<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome to CoralBusiness</title>

  <?php echo $__env->make('partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

  <div class="wrapper">

     <?php echo $__env->yieldContent('content'); ?>

  </div>


  <?php echo $__env->make('partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH /home/nahid/software/laravel/CoralBusiness/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>