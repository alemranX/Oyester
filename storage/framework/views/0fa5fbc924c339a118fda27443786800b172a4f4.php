
<nav class="navbar sticky-top sticky-offset navbar-expand-lg navbar-light bg-light" id="navbarColor">
  <div class="container">


    <a  class="navbar-brand" style="color:purple; margin-bottom:5px;" href="<?php echo e(route('index')); ?>">Honey Nut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(route('index')); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(route('products')); ?>">Products <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(route('contact')); ?>">contact us <span class="sr-only">(current)</span></a>
        </li>

        <li>
            <form class="form-inline my-2 my-lg-0" action= "<?php echo route('search'); ?>" method="get()">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" placeholder="Search Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>

          </form>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
        <li>
           <a href="<?php echo e(route('carts')); ?>">
            <button class="btn btn-warning" type="submit"><i class="fa fa-cart-plus"></i>
             <span class="badge badge-warning">
                <h6><?php echo e(App\cart::totalItems()); ?></h6>
             </span>

            </button>
           </a>
        </li>
          <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                  </li>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php else: ?>
                      <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                             onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                  <?php echo e(__('Logout')); ?>

                          </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                           <?php echo csrf_field(); ?>
                        </form>
                        </div>
                    </li>
              <?php endif; ?>

              
      </ul>
     
      
    </div>
  </div>
</nav>
<!-- End Navbar Part --><?php /**PATH /home/nahid/Desktop/Honey_Nut/resources/views/partials/nav.blade.php ENDPATH**/ ?>