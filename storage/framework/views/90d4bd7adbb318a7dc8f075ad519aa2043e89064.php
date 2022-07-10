<!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
          <nav class="navbar top-navbar navbar-expand-md navbar-light">
              <div class="navbar-header" data-logobg="skin5">
                  <!-- This is for the sidebar toggle which is visible on mobile only -->
                  <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                      <i class="ti-menu ti-close"></i>
                  </a>
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <div class="navbar-brand">
                      <a href="index.html" class="logo text-light px-5">S.A.T.A</a>
                  </div>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- Toggle which is visible on mobile only -->
                  <!-- ============================================================== -->
                  
              </div>
              <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                  <!-- ============================================================== -->
                  <!-- toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-start me-auto">
                      <!-- ============================================================== -->
                      <!-- Search -->
                      <!-- ============================================================== -->
                      <li class="nav-item search-box">
                          <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                              <div class="d-flex align-items-center">
                                  <i data-feather="search" height="16" width="16"></i>
                                  <div class="ms-1 d-none d-sm-block">
                                      <span>  Search</span>
                                  </div>
                              </div>
                          </a>
                          <form class="app-search position-absolute" action="/all-fertilizers">
                              <input type="text" class="form-control" placeholder="Search.." name="search">
                              <a class="srh-btn">
                                  <i class="ti-close"></i>
                                  <button class="btn btn-primary" type="submit">Search</button>
                              </a>
                          </form>
                      </li>
                  </ul>
                  <!-- ============================================================== -->
                  <!-- Right side toggle and nav items -->
                  <!-- ============================================================== -->
                  <ul class="navbar-nav float-end">
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <h4 class="mt-4 text-dark">Welcome back, <?php echo e(auth()->user()->name); ?> <i data-feather="chevron-down"></i></h4>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/profile"><i data-feather="user" class="px-1"></i>
                                  My Profile</a>
                              <form action="\logout" method="post">
                                  <?php echo csrf_field(); ?>
                                  <button type="submit" class="btn btn-light dropdown-item px-3"><i data-feather="log-out" class="px-1"></i> Logout</button>
                              </form>
                          </ul>
                      </li>
                      <!-- ============================================================== -->
                      <!-- User profile and search -->
                      <!-- ============================================================== -->
                  </ul>
              </div>
          </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <?php /**PATH D:\applications\tubes-psi\resources\views/dashboard/layouts/header.blade.php ENDPATH**/ ?>