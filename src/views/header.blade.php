

 <header class="header">
    <div id="hRow">
        <div class="container">
            <div class="top-nav w-100 d-flex align-items-center justify-content-between flex-wrap">
                <div>
                    <div class="logo"><a href="/"><img src="{{ $theme->getSetting('LOGO') }}" class="logo-size"></a></div>
                </div>

            </div>

        </div>
        <div class="nav-section">
            <div class="container">
                <nav>
                    <div class="navbar mobile-view">
                        <div class="desktop-none">
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div class="logo"><a href="/">
                                    <img src="{{url('public/assets/img/logo.png')}}" class="logo-size"></a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="contact-side-nav">
                                    <a href="{{''}}" class="font-14 font-dinopro-bold text-uppercase contact-mobile-views">
                                        <svg class="me-1" id="noun-contact-3842558" xmlns="http://www.w3.org/2000/svg" width="15.546" height="12.673" viewBox="0 0 17.546 14.673">
                                            <g id="Group_13929" data-name="Group 13929">
                                                <path id="Path_5180" data-name="Path 5180" d="M15.683,24.991l-2.82-1.456a.937.937,0,0,0-1.161.258L10.67,25.12a9.76,9.76,0,0,1-2.654-1.954,10.315,10.315,0,0,1-1.972-2.709l1.308-1.014a.937.937,0,0,0,.258-1.161l-1.456-2.8a.941.941,0,0,0-1.345-.35l-1.788,1.2A1.416,1.416,0,0,0,2.4,17.583a8.628,8.628,0,0,0,.221,1.6A13.044,13.044,0,0,0,6.155,25.01a13.489,13.489,0,0,0,5.824,3.538,10.515,10.515,0,0,0,1.6.221,1.384,1.384,0,0,0,1.272-.645l1.161-1.806A.912.912,0,0,0,15.683,24.991Z" transform="translate(-2.394 -14.099)" fill=""/>
                                                <path id="Path_5181" data-name="Path 5181" d="M50.92,10.2H42.037a.739.739,0,0,0-.737.737v.479l5.179,2.175,5.179-2.175v-.479A.739.739,0,0,0,50.92,10.2Z" transform="translate(-34.13 -10.2)" fill=""/>
                                                <path id="Path_5182" data-name="Path 5182" d="M46.479,25.964a1.283,1.283,0,0,1-.461-.092L41.3,23.9v4.257a.739.739,0,0,0,.737.737h8.9a.739.739,0,0,0,.737-.737V23.9l-4.736,1.972A1.283,1.283,0,0,1,46.479,25.964Z" transform="translate(-34.13 -21.375)" fill=""/>
                                            </g>
                                        </svg>
                                        Contact us
                                    </a>
                                    </div>
                                    <!-- <a class="btn btn-h-40 me-2 font-medium btn-outline-primary login-btns cursor-pointer" onclick="showhide()">Login</a> -->
                                    <div class="d-flex align-items-center">
                                        <i class='bx bx-menu'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-links">
                            <div class="sidebar-logo">
                                <span class="logo-name">
                                    <a href="#"><img src="{{url('public/assets/img/logo.png')}}" class="logo-sidebar"></a>
                                </span>
                                <i class='bx bx-x close-side'></i>
                            </div>
                            <ul class="links align-items-center">
                                <li  ><a href="/" class="font-bold">Home</a></li>
                                <li ><a href="{{''}}">About Us</a></li>
                                <li  class=" {{ request()->is('sector-details/*') ? 'active-nav' : '' }}" ><a href="{{''}}">Our Courses  </a></li>
                                <li class=" {{ request()->is('services-details/*') ? 'active-nav' : '' }}"><a href="{{''}}">Our Departments</a></li>
                                <li class="{{ request()->is('services-details/*') ? 'active-nav' : '' }}"><a href="#">Downloads</a></li>
                                <li class="has_menu {{ (request()->is('news-details/*') || request()->is('event-details/*')) ? 'active-nav' : '' }}">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">News & Events</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{''}}">Latest News</a></li>
                                            <li><a class="dropdown-item" href="{{''}}">Upcoming Events</a></li>
                                            <li><a class="dropdown-item" href="{{''}}">Photo Gallery</a></li>
                                        </ul>
                                </li>

                                 <li  ><a href="{{''}}">Blog</a></li>
                                <li ><a href="{{''}}">Contact us</a></li>
                                <div class="mobile-nav-show">
                                    <li><a href="#">Distance Learning</a></li>
                                    <li><a href="#">Tenders</a></li>
                                    <li><a href="#">Alumni Program</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Student Portal Login</a></li>
                                </div>
                            </ul>
                            <div class="postion-relative sticy-btn">

                            </div>
                        </div>
                        <div class="overlay-backdrop"></div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <a href="{{''}}" class="btn btn-h-55 font-16 font-dinopro-bold text-uppercase contact-btn-top">
        <svg class="me-2" id="noun-contact-3842558" xmlns="http://www.w3.org/2000/svg" width="17.546" height="14.673" viewBox="0 0 17.546 14.673">
            <g id="Group_13929" data-name="Group 13929">
                <path id="Path_5180" data-name="Path 5180" d="M15.683,24.991l-2.82-1.456a.937.937,0,0,0-1.161.258L10.67,25.12a9.76,9.76,0,0,1-2.654-1.954,10.315,10.315,0,0,1-1.972-2.709l1.308-1.014a.937.937,0,0,0,.258-1.161l-1.456-2.8a.941.941,0,0,0-1.345-.35l-1.788,1.2A1.416,1.416,0,0,0,2.4,17.583a8.628,8.628,0,0,0,.221,1.6A13.044,13.044,0,0,0,6.155,25.01a13.489,13.489,0,0,0,5.824,3.538,10.515,10.515,0,0,0,1.6.221,1.384,1.384,0,0,0,1.272-.645l1.161-1.806A.912.912,0,0,0,15.683,24.991Z" transform="translate(-2.394 -14.099)" fill="#fff"/>
                <path id="Path_5181" data-name="Path 5181" d="M50.92,10.2H42.037a.739.739,0,0,0-.737.737v.479l5.179,2.175,5.179-2.175v-.479A.739.739,0,0,0,50.92,10.2Z" transform="translate(-34.13 -10.2)" fill="#fff"/>
                <path id="Path_5182" data-name="Path 5182" d="M46.479,25.964a1.283,1.283,0,0,1-.461-.092L41.3,23.9v4.257a.739.739,0,0,0,.737.737h8.9a.739.739,0,0,0,.737-.737V23.9l-4.736,1.972A1.283,1.283,0,0,1,46.479,25.964Z" transform="translate(-34.13 -21.375)" fill="#fff"/>
            </g>
        </svg> Contact us
    </a>
</header>
