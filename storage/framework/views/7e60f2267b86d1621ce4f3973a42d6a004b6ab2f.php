
<form class="form-inline" action="<?php echo e(route('carts.store')); ?>" method="post">
   <?php echo csrf_field(); ?>

    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
   <button type="submit" class="btn btn-outline-success"> <i class="fa fa-plus"></i> Add to Cart <i class="fa fa-minus"></i></button>
</form><?php /**PATH /home/nahid/Desktop/Honey_Nut/resources/views/partials/cart-button.blade.php ENDPATH**/ ?>