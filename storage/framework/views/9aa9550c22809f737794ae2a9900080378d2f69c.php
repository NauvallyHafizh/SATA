<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">S.A.T.A</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <?php if(auth()->guard()->check()): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome Back, <?php echo e(auth()->user()->name); ?>

                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-sidebar-reverse"></i>
                        My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="\logout" method="post">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                    </li>
                </ul>
              </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="/" class="nav-link"></a>
                </li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
</nav><?php /**PATH D:\applications\tubes-psi\resources\views/partials/navbar.blade.php ENDPATH**/ ?>