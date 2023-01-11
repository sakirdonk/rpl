  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?= base_url('assets/img/2.png') ?>" alt="Agrimart Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Agrimart Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
            if ($this->session->has_userdata('USERNAME')) {
              echo $this->session->userdata('USERNAME');
              echo ' - ' . $this->session->userdata('ROLE');
            }

            ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php //if ($this->session->userdata('ROLE') == 'ADMIN') { 
          ?>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/produk') ?>" class="nav-link">
              <i class="nav-icon fa fa-dropbox"></i>
              <p>
                Daftar Produk
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/review') ?>" class="nav-link">
              <i class="nav-icon fa fa-star"></i>
              <p>
                Review
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/orderlist') ?>" class="nav-link">
              <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Order List
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/user') ?>" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                User List
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/admin/faq') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                FAQs
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <?php //} 
          ?>
          <li class="nav-item">
            <a href="<?= base_url('index.php/login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar fa fa-user -->
  </aside>