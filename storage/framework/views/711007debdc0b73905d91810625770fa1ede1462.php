
    <!-- Favicon -->
    <link href="users/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/users/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/users/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/users/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/users/css/style.css" rel="stylesheet">




    <!-- Topbar Start -->

<!-- Topbar End -->

<!-- Navbar -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="<?php echo e(route('user.index')); ?>" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>YourTour</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="<?php echo e(route('user.index')); ?>" class="nav-item nav-link ">Home</a>
                <a href="<?php echo e(route('user.about')); ?>" class="nav-item nav-link">About</a>
                
                
                <a href="<?php echo e(route('user.contact')); ?>" class="nav-item nav-link">Contact</a>
                <?php if(!Auth::user()): ?>
                <a href="<?php echo e(route('user.login')); ?>" class="nav-item nav-link">Log in</a>
                <?php endif; ?>
                <?php if(Auth::user()): ?>
                <a href="<?php echo e(route('user.login.destroy')); ?>" class="nav-item nav-link">logout</a>
                <?php endif; ?>
            </div>
            <?php if(!Auth::user()): ?>
            <a href="<?php echo e(route('user.signup.index')); ?>" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            <?php endif; ?>
            <?php if(Auth::user()): ?>
            <a href="<?php echo e(route('user.profile.index')); ?>" class="btn btn-primary rounded-pill py-2 px-4">Account</a>
            <?php endif; ?>
        </div>
    </nav>
<!-- Navbar  -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/tempusdominus/js/moment.min.js"></script>
<script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<?php /**PATH C:\xampp\htdocs\yourTour\resources\views/publicUser/navbar.blade.php ENDPATH**/ ?>