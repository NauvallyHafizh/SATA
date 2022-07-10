

<?php $__env->startSection('container'); ?>

        <?php if($fertilizers->count()): ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">All Fertilizers</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><i data-feather="chevron-right" height="12" weight="12"></i></li>
                                    <li aria-current="page">All Fertilizers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Fertilizer Name</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $fertilizers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fertilizer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                                            <td><?php echo e($fertilizer->user->name); ?></td>
                                            <td><?php echo e($fertilizer->fertilizer_name); ?></td>
                                            <td><?php echo e($fertilizer->quantity); ?></td>
                                            <td><?php echo e($fertilizer->price); ?></td>
                                            <td><?php echo e($fertilizer->category->name); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php else: ?>
    <p class="text-center fs-4">No fertilizers found.</p>
    <?php endif; ?>

    
    <div class="d-flex justify-content-center">
      <?php echo e($fertilizers->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\tubes-psi\resources\views/dashboard/all-fertilizers/index.blade.php ENDPATH**/ ?>