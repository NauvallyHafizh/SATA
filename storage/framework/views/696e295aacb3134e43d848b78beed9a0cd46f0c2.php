

<?php $__env->startSection('container'); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Register Your Fertilizers!</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><i data-feather="chevron-right" height="12" weight="12"></i></li>
                                    <li aria-current="page">Register Fertilizer</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <form method="post" action="/form" class="form-horizontal mt-4" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e(auth()->user()->name); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="<?php echo e(auth()->user()->email); ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="fertilizer_name">Seed Name</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['fertilizer_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="fertilizer_name" name="fertilizer_name" required value="<?php echo e(old('fertilizer_name')); ?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-select" name="category_id" id="category_id">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(old('category_id') == $category->id): ?>
                                                <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity (kg)</label>
                                    <input type="number" class="form-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="quantity" name="quantity" required value="<?php echo e(old('quantity')); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price / 50kg</label>
                                    <input class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" id="price" name="price" required value="<?php echo e(old('price')); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="month">Select month: </label>
                                    <select class="form-select" name="month_id" id="month_id">
                                        <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(old('month_id') == $month->id): ?>
                                                <option value="<?php echo e($month->id); ?>" selected><?php echo e($month->name); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($month->id); ?>"><?php echo e($month->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\tubes-psi\resources\views/dashboard/form/index.blade.php ENDPATH**/ ?>