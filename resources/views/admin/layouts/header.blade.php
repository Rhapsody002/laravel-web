        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                                    aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    
                    <!-- Navbar links -->
                    <li class="navbar-nav align-items-center">
                        <a class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-1" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <img class="w-px-40 h-auto rounded-circle"
                                        src="{{ asset('assets-admin/img/avatars/profile-picture-3.jpg') }}"
                                        alt="">
                                    <div class="media-body ms-2 text-dark d-flex flex-column">
                                        <span class="fw-bold text-gray-900">
                                            {{ Auth::user()->name }}
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end mt-2 p-2">
                                <!-- My Profile -->
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" width="20" height="20"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M11.493 3.17c-.38-1.26-2.56-1.26-2.94 0C7.19 5.05 5.05 7.19 3.17 8.55c-1.26.38-1.26 2.56 0 2.94 1.88 1.36 4.02 3.5 4.38 5.37.38 1.26 2.56 1.26 2.94 0 .36-1.87 2.5-4.01 4.38-5.37 1.26-.38 1.26-2.56 0-2.94-1.26-1.87-3.40-4.01-5.37-5.37z" />
                                        </svg>
                                        My Profile
                                    </a>
                                </li>

                                <li>
                                    <div class="dropdown-divider my-1"></div>
                                </li>

                                <!-- Settings -->
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" width="20" height="20"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M10 3a7 7 0 100 14A7 7 0 0010 3zm0 12a5 5 0 110-10 5 5 0 010 10z" />
                                        </svg>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <div class="dropdown-divider my-1"></div>
                                </li>

                                <!-- Logout -->
                                <li>
                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                        <svg class="dropdown-icon text-danger me-2" width="20" height="20"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M7 10h6m0 0l-2-2m2 2l-2 2M10 4v2m0 8v2m4-10h2v8h-2m-8-8H4v8h2" />
                                        </svg>

                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </a>
                    </li>

                </div>
            </div>
        </nav>
