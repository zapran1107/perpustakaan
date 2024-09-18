<header class="top-header">
    <nav class="navbar navbar-expand align-items-center gap-4 bg-dark">

        <div class="search-bar flex-grow-1">
            <div class="position-relative">
                {{-- <div class="search-popup p-3">
                    <div class="card rounded-4 overflow-hidden">
                        <div class="card-body search-content">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <ul class="navbar-nav gap-1 nav-right-links align-items-center ">
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
                    <div class="notify-list">
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown ">
                <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <img src="https://placehold.co/110x110/png" class="rounded-circle p-1 border" width="45" height="45" alt="">
                </a>
                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                    <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                        <div class="text-center">
                            <img src="https://placehold.co/110x110/png" class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
                            <h5 class="user-name mb-0 fw-bold">Hello {{Auth::user()->name}}</h5>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    @auth
                    @if(auth()->user()->isAdmin)

                    @endif
                    @endauth
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ url('/')}}">
                        <i class="material-icons-outlined">buku</i></a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons-outlined">logout</i></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

    </nav>
</header>
