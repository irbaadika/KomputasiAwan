<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="/dashboard">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">User</li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/admin/member">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">Member</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="admin">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">Admin</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="admin">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/user">Manage Admin</a></li>
          </ul>
        </div>
        <div class="collapse" id="admin">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/user/create">Add Admin</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#buyer" aria-expanded="false" aria-controls="buyer">
          <i class="menu-icon mdi mdi-account-multiple-outline"></i>
          <span class="menu-title">Buyer</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="buyer">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/buyer">Manage Buyer</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#seller" aria-expanded="false" aria-controls="seller">
          <i class="menu-icon mdi mdi-account-multiple"></i>
          <span class="menu-title">Seller</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="seller">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/seller">Manage Seller</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item nav-category">Product</li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/category">
          <i class="menu-icon mdi mdi-layers-outline"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/merk">
          <i class="menu-icon mdi mdi-clippy"></i>
          <span class="menu-title">Merk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/product">
          <i class="menu-icon mdi mdi-laptop"></i>
          <span class="menu-title">Product</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Form elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-laptop"></i>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/product">Manage Product</a></li>
          </ul>
        </div>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/product/create">Add Product</a></li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Tables</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="menu-icon mdi mdi-layers-outline"></i>
          <span class="menu-title">Icons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item nav-category">Transaction</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#trans" aria-expanded="false" aria-controls="trans">
          <i class="menu-icon mdi mdi-chart-line"></i>
          <span class="menu-title">Transaction</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="trans">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/transaksi">Manage Transaction</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Reports</li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/report">
          <i class="menu-icon mdi mdi-alert-circle-outline"></i>
          <span class="menu-title">Report</span>
        </a>
      </li>

    </ul>
  </nav>