

<?php $__env->startSection('container'); ?>

<div class="row justify-content-center">
    <div class="col-md-4 mt-5">

      
      <?php if(session()->has('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>

      
      <?php if(session()->has('loginError')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('loginError')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>

      <main class="form-signin w-100 m-auto mt-5">
        <h1 class="fw-normal text-center">S.A.T.A</h1>
        <h2 class="h3 mb-3 fw-normal text-center">Login</h2>
        <form action="/" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-floating">
            <input type="text" name="username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username" placeholder="Username" autofocus required value="<?php echo e(old('username')); ?>">
            <label for="username">Username</label>
            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback">
              <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        </form>
        <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now</a></small>
      </main>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\tubes-psi\resources\views/login/index.blade.php ENDPATH**/ ?>