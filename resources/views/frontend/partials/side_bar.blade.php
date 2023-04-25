<div class="side_bar d-none d-md-block overflow-hidden shadow my-3 pt-3 rounded">
    <div class="d-flex flex-column align-items-center h-100">
        <div class="logo pb-3">
            <a class="routeHomePage cursor-pointer">
                <img src="{{ asset('frontend/images/icons/logo-single-light.svg') }}" style="width: 40px; height: 40px"
                    alt="" />
            </a>
        </div>
        <div
            class="side_bar_nav text-white fs-8px fw-light letter-spacing-1px d-flex text-center flex-column w-100 h-100 pt-3">
            <div class="nav-home">
                <a class="routeHomePage cursor-pointer text-white text-decoration-none">
                    <div class="side_bar_nav_icon">
                        <img src="{{ asset('frontend/images/icons/nav/home.svg') }}" alt="" />
                        <!-- <i class="fa-solid fa-house fs-5" style="color: #ffffff;"></i> -->
                    </div>
                    <div class="mt-1"><span>Home</span></div>
                </a>
            </div>
            <div class="routeAboutPage nav-about cursor-pointer">
                <div class="side_bar_nav_icon">
                    <img src="{{ asset('frontend/images/icons/nav/about.svg') }}" alt="" />
                    <!-- <i class="fa-solid fa-user fs-5" style="color: #ffffff;"></i> -->
                </div>
                <div class="mt-1"><span>About</span></div>
            </div>
            <div class="routePortfolioPage nav-portfolio cursor-pointer">
                <div class="side_bar_nav_icon">
                    <img src="{{ asset('frontend/images/icons/nav/portfolio.svg') }}" alt="" />
                    <!-- <i class="fa-solid fa-briefcase fs-5" style="color: #ffffff;"></i> -->
                </div>
                <div class="mt-1"><span>Portfolio</span></div>
            </div>
            <div class="nav-blog">
                <a href="{{ route('blogs') }}" target="_blank" class="text-white text-decoration-none">
                    <div class="side_bar_nav_icon">
                        <img src="{{ asset('frontend/images/icons/nav/blog.svg') }}" alt="" />
                        <!-- <i class="fa-regular fa-newspaper fs-5" style="color: #ffffff;"></i> -->
                    </div>
                    <div class="mt-1"><span>Blog</span></div>
                </a>
            </div>
            <div class="routeContactPage nav-contact mt-auto cursor-pointer py-2">
                <div>
                    <img src="{{ asset('frontend/images/icons/nav/contact.svg') }}" alt="" />
                </div>
                <div class="mt-1"><span>Contact</span></div>

            </div>
        </div>
    </div>
</div>
