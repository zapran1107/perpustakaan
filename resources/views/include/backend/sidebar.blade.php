
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
            <a class="nav-link" href="{{route ('home')}}">
                <i class="fa fa-th-large" style="font-size:25px;"></i>
                <P>DASHBOARD ADMIN</P>
            </a>

          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route ('penulis.index')}}">
                <i class="fa fa-edit" style="font-size:25px"></i>
              <p>PENULIS</p>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route ('penerbit.index')}}">
                <i class="fa fa-address-book-o" style="font-size:25px"></i>
                      <p>PENERBIT</p>
                    </a>
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="{{route ('kategori.index')}}">
                            <i class="fa fa-list-alt" style="font-size:25px;"></i>
                            <p>KATEGORI</p>
                        </a>
                        </li>
                        <li class="nav-item menu-items">
                            <a class="nav-link" href="{{route ('buku.index')}}">
                                <i class="fa fa-book" style="font-size:25px"></i>
                              <p>BUKU</p>
                            </a>
                        </li>
                        <li class="nav-item menu-items">
                            <a class="nav-link" href="{{route ('peminjamanadmin.admin')}}">
                                <i class="fa fa-file-text-o" style="font-size:25px;"></i>
                              <p>PENGAJUAN PEMINJAMAN</p>
                            </a>
                        </li>

                        <li class="nav-item menu-items">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="fa fa-user-circle" style="font-size:25px"></i>
                              <p>USER</p>
                            </a>
                        </li>

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
