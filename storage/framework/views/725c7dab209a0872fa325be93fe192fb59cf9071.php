 


<?php $__env->startSection('content'); ?>
  <div class='container margin-top-20' id="contactPage" >
    <h2 style="color:purple"> Your Cart Items </h2>

    <div class="float-right" style="margin-bottom:50px">
        <a href="<?php echo e(route('products')); ?>" class="btn btn-info"> Shopping Continue</a>
        <a href="<?php echo e(route('checkouts')); ?>" class="btn btn-warning"> CheckOut</a>
    </div>
    <br>

    <table class="table table-bordered table-striped">
      <thead>
          <tr>
            <th>No.</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Quantity</th>
            <th>Unit Price</th>
            <th>Total Unit Price</th>
            <th>Delete</th>
          </tr>
      </thead>
      <tbody>

      <?php
          $total_price = 0;
      ?>

        <?php $__currentLoopData = App\cart::totalCarts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <tr>
                <td><?php echo e($loop->index + 1); ?></td>

                <td><?php echo e($cart->product->title); ?></td>
                <td>
                    <?php if($cart->product->images->count() > 0): ?>
                      <img src="<?php echo e(asset('images/products/'. $cart->product->images->first()->image)); ?>" width="70px">
                    <?php endif; ?>
                </td>
                <td>
                    <form class="form-inline" action="<?php echo e(route('carts.update', $cart->id)); ?>" method = "post">
                        <?php echo csrf_field(); ?>

                        <input type="number" name="product_quantity" class="form-control" value = "<?php echo e($cart->product_quantity); ?>"> 
                        <button type= "submit" class = "btn btn-info ml-2">update</button>
                    </form>
                </td>
                 
                 <td>
                    <?php echo e($cart->product->price); ?>

                 </td>
                 <td>
                    <?php
                         $total_price += $cart->product->price * $cart->product_quantity;
                    ?>
                    <?php echo e($cart->product->price * $cart->product_quantity); ?>

                 </td>

                <td>
                    <form class="form-inline" action="<?php echo e(route('carts.delete', $cart->id)); ?>" method = "post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="cart_id" > 
                        <button type= "submit" class = "btn btn-danger">Delete</button>
                    </form>
                </td>
         </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <tr>
           <td colspan="4"></td>
           <td><b>Total Price: </b></td>
           <td colspan="1"><?php echo e($total_price); ?> Taka</td>
        </tr>

      </tbody>
    </table>
    
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nahid/Desktop/Honey_Nut/resources/views/pages/cart.blade.php ENDPATH**/ ?>