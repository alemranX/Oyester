<?php $__env->startSection('content'); ?>
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div id= "AddProduct" class="card-header">
          <b>Add Product</b>
          <a id="cancelProductButton" class="btn btn-warning" href = "<?php echo e(route('admin.index')); ?>">Cancel</a>
        </div>
        <div class="card-body">
          <form action="<?php echo e(route('admin.product.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Ex. coral">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea placeholder="Ex. it's awesome" name="description" rows="6" cols="80" class="form-control"></textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="number" placeholder="Ex. 50" class="form-control" name="price" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Quantity</label>
              <input type="number" class="form-control" placeholder="Ex:1" name="quantity" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="product_image">Product Image</label>

              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Ad Product</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nahid/Desktop/CoralBusiness/resources/views/admin/pages/product/create.blade.php ENDPATH**/ ?>