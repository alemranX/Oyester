<!-- manage products -->

<?php $__env->startSection('content'); ?>
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div id="AddProduct" class="card-header">
           <b> Welcome to Admin Panel </b>
           <a id="adminGotoHomeButton" class="btn btn-warning"  href = "<?php echo e(route('index')); ?>"> go to home page</a>
              <a id="adminProductCreateButton" class="btn btn-warning"  href = "<?php echo e(route('admin.product.create')); ?>"> Add new Product </a>
        </div>
        <div class="card-body">
          <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>Product Title</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>#</td>
                <td><?php echo e($product->title); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->quantity); ?></td>
                <td>
                  <a href="<?php echo e(route('admin.product.edit', $product->id)); ?>" class="btn btn-info">Edit</a>
                  <a href="#deleteModal<?php echo e($product->id); ?>" data-toggle="modal" class="btn btn-danger"> Delete</a>


                  <div class="modal fade" id="deleteModal<?php echo e($product->id); ?>" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-body">
                          <p>Are you sure You want to delete?</p>
                        </div>
                        <div class="modal-footer">
                          <form action="<?php echo route('admin.product.delete', $product->id); ?>" method="post"> 
                              <?php echo e(csrf_field()); ?>

                              <button type="submit" class="btn btn-outline-danger">Delete</button>
                          </form>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                
                
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </table>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nahid/software/laravel/CoralBusiness/resources/views/admin/index.blade.php ENDPATH**/ ?>