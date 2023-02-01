<?php $__env->startSection('title'); ?>
Trips details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/adminlte.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page1'); ?>
admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_page2'); ?>
trip details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Main content -->
    <section class="content">
        <?php $img=$data[0]['image']?>
        <?php $img2=$data[0]['image2']?>


        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                <div class="col-12">
                  <img src="<?php echo e(URL::asset("storage/image/$img")); ?>" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                  <div class="product-image-thumb active"><img src="<?php echo e(URL::asset("storage/image/$img2")); ?>" alt="Product Image"></div>
                  <div class="product-image-thumb" ><img src="<?php echo e(URL::asset("storage/image/$img")); ?>" alt="Product Image"></div>
                  
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3"><?php echo e($data[0]['name']); ?></h3>
                <p><?php echo e($data[0]['short_description']); ?></p>

                <hr>
                <h4>Category : <?php echo e($data[0]['category']); ?> </h4>


                <h4 class="mt-3">Guest  number : <?php echo e($data[0]['guest_number']); ?></h4>


                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">
                    Price : <?php echo e($data[0]['price']); ?> JD
                  </h2>

                </div>




              </div>
            </div>
            <div class="row mt-4">
              <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                  <a class="nav-item nav-link " id="product-desc-tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                  
                  
                </div>
              </nav>
              <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?php echo e($data[0]['long_description']); ?> </div>
                
                
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<!-- jQuery -->

<script src="<?php echo e(URL::asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(URL::asset('assets/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(URL::asset('assets/js/demo.js')); ?>"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yourTour\resources\views/admin/tripsTable/details.blade.php ENDPATH**/ ?>