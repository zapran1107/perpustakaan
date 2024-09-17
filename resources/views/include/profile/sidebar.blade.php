\<div class="sidebar" data-background-color="dark">
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
                <a class="nav-link" href="{{ route('profile')}}">
                  <i class="fas fa-layer-group"></i>
                  <p>DATA</p>
                </a>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('peminjaman.index')}}">
              <i class="fas fa-layer-group"></i>
              <p>PEMINJAMAN</p>
            </a>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('profile')}}">
                  <i class="fas fa-layer-group"></i>
                  <p>PROFILE</p>
                </a>
            {{-- <li class="nav-item menu-items">
                <a class="nav-link" href="">
                  <i class="fas fa-layer-group"></i>
                  <p>PROFILE</p>
                </a> --}}
                 {{-- <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 <i class="material-icons-outlined"></i>Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                </form> --}}
            <div class="collapse" id="submenu">
              <ul class="nav nav-collapse">
                <li>
                  <div class="collapse" id="subnav1">
                    <ul class="nav nav-collapse subnav">
                      <li>
                      </li>
                      <li>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="collapse" id="subnav2">
                    <ul class="nav nav-collapse subnav">
                      <li>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
