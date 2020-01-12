<?php $__env->startSection('content'); ?>

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">

      <div class="col-md-11">
        <div class="widget">
          <div class="row">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div class="col-md-4">
                <div class="card">

                <?php $i = 1; ?>

                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($i > 0): ?>
                        <img class="card-img-top feature-img" src="<?php echo e(asset('images/products/'. $image->image)); ?>" alt="Card image" >
                    <?php endif; ?>

                    <?php $i--; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <div class="card-body">
                    <h4 class="card-title">
                      <?php echo e($product->title); ?>

                    </h4>
                    <p class="card-text"><?php echo e($product->description); ?></p>
                    <b class="card-text">Taka - <?php echo e($product->price); ?></b>
                    <br>
                    <?php echo $__env->make('partials.cart-button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
                </div>
              </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nahid/software/laravel/CoralBusiness/resources/views/pages/product/index.blade.php ENDPATH**/ ?>