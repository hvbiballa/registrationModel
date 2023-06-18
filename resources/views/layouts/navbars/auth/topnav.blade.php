<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl
        {{ str_contains(Request::url(), 'virtual-reality') == true ? ' mt-3 mx-3 bg-primary' : '' }}"
    id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3 mt-2">
        <div class="navbar bg-white collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" style="border-radius: 20px;"
            id="navbar">
            <div class="">
                <h6 class="font-weight-bolder mb-0 text-dark">{{ $title }}</h6>
            </div>
            <ul class="navbar-nav justify-content-end">
                <!--
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link font-weight-bold bg-light rounded">
                        <i class="fa fa-bell"></i>
                    </a>
                </li> -->
                <li class="nav-item d-flex align-items-center ps-3">
                    <div class="text-xs px-2 text-end">
                        <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                        <p class="text-xs mb-0">{{ Auth::user()->role }}</p>
                    </div>
                    <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="nav-link font-weight-bold">
                            <i class="fa fa-user me-sm-1"></i>
                        </a>
                    </form>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-black"></i>
                            <i class="sidenav-toggler-line bg-black"></i>
                            <i class="sidenav-toggler-line bg-black"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
