<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
<?php echo $__env->make('publicUser.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="main-body">
    <h3>User profile</h3>
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

    </div>
<?php endif; ?>
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo e(asset("storage/image/".auth()->user()->image)); ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo e(auth()->user()->name); ?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e(auth()->user()->name); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e(auth()->user()->email); ?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo e(auth()->user()->phone); ?>

                    </div>
                  </div>
                  <hr>


                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="<?php echo e(route('user.profile.edit',auth()->user()->id)); ?>" style="border-radius: 10px">Edit</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
    </div>







    <!-- My Trips -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">My Trips</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        
                        <img class="img-fluid" src="<?php echo e(asset("storage/image/".$value['trip_image'])); ?>" alt="">
                        
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo e($value['trip']); ?></small>
                        
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0"><?php echo e($value['price']); ?> Jd</h3>

                        <p>Date : <?php echo e($value['res_date']); ?></p>
                        <p>number_of_guest : <?php echo e($value['number_of_guest']); ?></p>
                        <p>status : <?php echo e($value['status']); ?></p>
                        
                        <div class="d-flex justify-content-center mb-2" style="max-height: 31px">
                            <a href="<?php echo e(route('user.book.edit',$value['id'])); ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Edit</a>
                            <form action="<?php echo e(Route('user.profile.destroy',$value['id'])); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-sm btn-primary px-3"  style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42); border-color:rgb(226, 42, 42);">Delete</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</div>

<!-- Package End -->
<?php echo $__env->make('publicUser.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/profile.blade.php ENDPATH**/ ?>