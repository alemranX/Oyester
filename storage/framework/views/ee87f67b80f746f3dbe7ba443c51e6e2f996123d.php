<?php $__env->startSection('content'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo e(asset('images/slideshow/'. 'huny1.jpg')); ?>"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo e(asset('images/slideshow/'. 'huny4.jpg')); ?>"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo e(asset('images/slideshow/'. 'huny3.jpg')); ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <hr>

 <div style="margin-top:10px" class="container">
   <h4><b>About Honey Nut: </b></h4>
  <p>
  Honey Nut Cheerios is a variation of Cheerios breakfast cereal, <br> 
  introduced in 1979 by the General Mills cereal company. <br>
   Unlike the original Cheerios, the second variation is sweeter than the original, <br>
    with a honey and almond flavor. While this product used to be made. 
    <a href="https://en.wikipedia.org/wiki/Honey_Nut_Cheerios" target="blank"> know more</a>
  </p>
  
 </div>

 <br>
 <div style="margin-top:15px" class="container">
   <h4><b>product review: </b></h4>
   <br>
   <b>Honey Nut 1:</b>
  <p>
    Honey Nut Cheerios is a variation of Cheerios breakfast cereal, <br> 
    introduced in 1979 by the General Mills cereal company. <br>
  </p>

  <b>Honey Nut 2:</b>
  <p>
    Honey Nut Cheerios is a variation of Cheerios breakfast cereal, <br> 
    introduced in 1979 by the General Mills cereal company. <br>
  </p>
  
 </div>

 <br>


 <div class="row">
   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="<?php echo e(asset('images/slideshow/'. 'huny1.jpg')); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey Nut</h5>
            <p class="card-text">
              Honey Nut Cheerios is a variation of Cheerios breakfast cereal, <br> 
              introduced in 1979 by the General Mills cereal company. <br>
            </p>
            <a href="<?php echo e(route('products')); ?>" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>

   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="<?php echo e(asset('images/slideshow/'. 'huny4.jpg')); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Honey Nut chocolate</h5>
            <p class="card-text">
            Honey Nut Cheerios is a variation of Cheerios breakfast cereal, <br> 
            introduced in 1979 by the General Mills cereal company. <br>
            <a href="<?php echo e(route('products')); ?>" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>

   <div class="col col-md-4">
    <div class="card" style="width: 19rem;">
        <img class="card-img-top" src="<?php echo e(asset('images/slideshow/'. 'huny3.jpg')); ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey Nut cream</h5>
            <p class="card-text">
               Honey Nut Cheerios is a variation of Cheerios breakfast cereal, <br> 
              introduced in 1979 by the General Mills cereal company. <br>
            </p>
            <a href="<?php echo e(route('products')); ?>" class="btn btn-primary">go to buy</a>
      </div>
    </div>
   </div>
 </div>
 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nahid/Desktop/CoralBusiness/resources/views/pages/index.blade.php ENDPATH**/ ?>