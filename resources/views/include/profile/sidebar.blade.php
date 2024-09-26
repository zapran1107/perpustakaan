<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="{{ asset('assets/img/smk assalaam.png')}}"
            alt="navbar brand"
            class="navbar-brand"
            height="100"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route ('dashboarduser')}}">
                <i class="fa fa-th-large" style="font-size:25px;"></i>
                <P>DASHBOARD USER</P>
            </a>

          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route ('peminjaman.index')}}">
                <i class="fa fa-hand-paper-o" style="font-size:24px"></i>
              <p>PEMINJAMAN</p>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route ('daftarbuku.index')}}">
                <i class="fa fa-book" style="font-size:25px"></i>
              <p>DAFTAR BUKU</p>
            </a>
        </li>
        </ul>
      </div>
    </div>
  </div>
