<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/">task</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <form action="{{ route('search') }}" method="get">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div id="custom-search" class="top-search-bar">
                                    <input class="form-control" type="search" placeholder="Search.." name="search">
                                </div>
                        </form>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span>welcome {{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="{{ route('updatePass') }}"><i class="fas fa-cog mr-2"></i>Chang Password</a>

                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="padding-left: 22px;">
                                            <i class="fas fa-power-off mr-2"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>