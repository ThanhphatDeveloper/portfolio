<header class="header-one header--sticky header-four">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-6">
                <a href="index-two.html" class="thumbnail">
                    <img src="{{ asset('assets/frontend/images/logo/mazin-02.svg') }}" alt="pixxi_logo">
                </a>
            </div>
            <div class="col-xl-8 justify-content-center d-flex d-none d-xl-block">
                <nav class="main-nav">
                    <ul id="nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li class=""><a href="#about">About</a></li>
                        <li class=""><a href="#service">Service</a></li>
                        <li class=""><a href="#portfolio">Portfolio</a></li>
                        <li class=""><a href="{{ route('blogs') }}">Blog</a></li>
                        <li class=""><a href="#gettouch">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-6 justify-content-end d-flex">
                <div class="open-h2-menu-area header-four" id="menu-btn">
                    <span>INTRO</span>
                    <a href="#" class="ml--20" onclick="event.preventDefault();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <rect x="0.000488281" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="0.000488281" y="7" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="0.000488281" y="14" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="7.00049" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="7.00049" y="7" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="7.00049" y="14" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="14.0005" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="14.0005" y="7" width="4" height="4" rx="2" fill="#141414" />
                            <rect x="14.0005" y="14" width="4" height="4" rx="2" fill="#141414" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>