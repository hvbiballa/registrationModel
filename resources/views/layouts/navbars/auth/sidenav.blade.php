<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
            <img src="{{ env('APP_URL') . '/img/logo-user.png' }}" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMCourse.index' ? 'active' : '' }}" href="{{ route('manageMCourse.index') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-certificate text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kursus Kahwin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMRequest.statusRequest' ? 'active' : '' }}" href="{{ route('manageMRequest.statusRequest') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kebenaran Berkahwin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMRegistration.index' ? 'active' : '' }}" href="{{ route('manageMRegistration.index') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-file-alt text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pendaftaran Perkahwinan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manageMCard.index' ? 'active' : '' }}" href="{{ route('manageMCard.index') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-id-card text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Permohonan Kad Kahwin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'viewApplicantConsForm' ? 'active' : '' }}" href="{{ route('viewApplicantConsForm') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-columns-gap text-secondary text-sm opacity-10" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Khidmat Nasihat</span>
                </a>
                                            
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'viewApplicationDetails' ? 'active' : '' }}" href="{{ route('viewApplicationDetails') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-columns-gap text-secondary text-sm opacity-10" viewBox="0 0 16 16">
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
                            <path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Insentif Khas</span>
                </a>
                                            
            </li>
            

            {{-- <!-- Contoh SideNav -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Example</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'user.index' ? 'active' : '' }}" href="{{ route('user.index') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'form-example' ? 'active' : '' }}" href="{{ route('form-example') }}">
                    <div class="icon icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Form</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'manage' ? 'active' : '' }}" href="{{ route('manage') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Manage</span>
                </a>
            </li> --}}
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
    
    </div>
</aside>
