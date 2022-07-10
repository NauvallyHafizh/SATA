<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
              <!-- Sidebar navigation-->
              <nav class="sidebar-nav">
                  <ul id="sidebarnav">
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard"
                              aria-expanded="false">
                              <span class="hide-menu px-2"><i data-feather="pie-chart" height="17" weight="17" stroke-width="2.5"></i> Dashboard</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/profile"
                              aria-expanded="false">
                              <span class="hide-menu px-2"><i data-feather="user" height="17" weight="17" stroke-width="2.5"></i> Profile</span>
                          </a>
                      </li>
                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/all-fertilizers"
                          aria-expanded="false">
                          <span class="hide-menu px-2"><i data-feather="table" height="17" weight="17" stroke-width="2.5"></i>  All Fertilizers</span>
                        </a>
                    </li>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                    <h7 class="d-flex justify-content-between align-items-center px-4 mt-4 mb-2 text-muted">
                        <span>Distributor</span>
                    </h7>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/form"
                            aria-expanded="false">
                            <span class="hide-menu px-2"><i data-feather="file" height="17" weight="17" stroke-width="2.5"></i>  Register Fertilizer</span>
                        </a>
                    </li>
                    <?php endif; ?>
                  </ul>
              </nav>
              <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  --><?php /**PATH D:\applications\tubes-psi\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>