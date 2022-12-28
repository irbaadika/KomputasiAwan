<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="/dashboardSeller">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      {{-- <li class="nav-item nav-category">User</li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="/admin/member">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">Member</span>
        </a>
      </li> --}}
      
      <li class="nav-item nav-category">Product</li>
      <li class="nav-item">
        <a class="nav-link" href="/sellerCategory">
          <i class="menu-icon mdi mdi-layers-outline"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sellerMerk">
          <i class="menu-icon mdi mdi-clippy"></i>
          <span class="menu-title">Merk</span>
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
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-laptop"></i>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/sellerProduct">Manage Product</a></li>
          </ul>
        </div>
        <div class="collapse" id="product">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/sellerProduct/create">Add Product</a></li>
          </ul>
        </div>
      </li>
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
            <li class="nav-item"> <a class="nav-link" href="/sellerTransaksi">Manage Transaction</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Services</li>
      <li class="nav-item">
        <a class="nav-link" href="/sellerService">
          <i class="menu-icon mdi mdi-wrench"></i>
          <span class="menu-title">Service</span>
        </a>
      </li>
    </ul>
  </nav>