

<?php $__env->startSection('container'); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Profile</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><i data-feather="chevron-right" height="12" weight="12"></i></li>
                                    <li aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="/img/Orang-mikir.png"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo e($profile[0]->name); ?></h4>
                                    <h6 class="card-subtitle"><?php echo e($profile[0]->username); ?></h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo e($profile[0]->email); ?></h6> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <?php echo $__env->make('dashboard.profile.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Column -->
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\tubes-psi\resources\views/dashboard/profile/index.blade.php ENDPATH**/ ?>