 


<?php $__env->startSection('content'); ?>
  <div class='container margin-top-20' id="contactPage" >
     
   <div class="card card-body">

       <div class="row">
          <div class="col col-md-6">
            <h2 style = "color:green">confirm items </h2>
                <br>
                <?php $__currentLoopData = App\cart::totalCarts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <b>
                        <p> 
                            <?php echo e($cart->product->title); ?> - 
                            <strong><?php echo e($cart->product->price); ?> Taka</strong> -
                            <?php echo e($cart->product_quantity); ?>  items
                        </p>
                    </b>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <b> 
                   <a href="<?php echo e(route('carts')); ?>" class="btn btn-primary"> change cart items</a>
                </b>
          </div>
        
         <div class="col col-md-5">
            <?php
                $tatal_price = 0;
            ?>

            <?php $__currentLoopData = App\cart::totalCarts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $tatal_price += $cart->product->price * $cart->product_quantity;
                ?>     
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <b>Total Price: <?php echo e($tatal_price); ?> Taka</b>
           <br>
           <b>Total Price with shipping cost: <?php echo e($tatal_price + App\setting::first()->shipping_cost); ?> Taka</b>

         </div>
                
       </div>
            
    </div>

    <div class="card card-body">
        <h4>
          <b style="color:purple">Shipping Address</b>
        </h4>
        <br>
         
         <div class="row">
             <div class="col col-md-2">
             </div>

             <div class="col col-md-8">
                <form action = "<?php echo e(route('order.success')); ?>">
                     <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputName"> <b>Receiver Name:</b> </label>
                        <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="<?php echo e(Auth::check() ? Auth::user()->name: ''); ?>">
                    </div>
                    <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputEmail1"> <b>Email address:</b> </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(Auth::check() ? Auth::user()->email : ''); ?>">
                    </div>

                    <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputPhone"> <b>Phone:</b> </label>
                        <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" value="<?php echo e(Auth::check() ? Auth::user()->phone : ''); ?>">
                    </div>
                    <div class="form-group" >
                        <label style="float:left; color: blue" for="exampleInputAddress"> <b>Address:</b> </label>
                        <input type="text" class="form-control" id="exampleInputAddress" aria-describedby="emailHelp" value="<?php echo e(Auth::check() ? Auth::user()->shipping_address : ''); ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>

             </div>

             <div class="col col-md-2">
             </div>
         </div>
       
    </div>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nahid/software/laravel/CoralBusiness/resources/views/pages/checkout.blade.php ENDPATH**/ ?>