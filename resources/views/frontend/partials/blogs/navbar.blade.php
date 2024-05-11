<nav class="navbar sticky-top navbar-expand-sm bg-transparent bg-black-100 pt-0 pb-0" style="z-index: 9999;">
    <div class="container-xxl px-4 px-xxl-0 py-2 py-sm-1 position-relative overflow-hidden">
        <div class="bg-blob position-absolute" style="right: 30%; top: 5%;">
            <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="150px" height="150px" class="blob-graph" alt="">
        </div>
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('frontend/images/icons/logo-single-light.svg') }}" style="width: 60px; height: 40px"
                alt="" />
        </a>
        <div id="blogMobileHamburger">
            <div></div>
        </div>
        <div id="blogNavbar">
            <ul class="navbar-nav ms-auto pe-1 mb-md-0">
                <!-- ms-auto (EN)  |   me-auto (AR) -->
                <li class="nav-item d-flex align-items-center me-sm-3 me-md-4">
                    <a href="{{ route('blogs') }}" type="button"
                        class="{{ request()->routeIs('blogs') ? 'active' : '' }} text-decoration-none fs-14px text-gray-400">Blog</a>
                </li>
                <li class="nav-item d-flex align-items-center me-sm-3 me-md-4">
                    <a href="{{ route('home') }}#portfolio" type="button"
                        class="text-decoration-none fs-14px text-gray-400">Portfolio</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('home') }}#contact" type="button"
                        class="text-decoration-none fs-14px text-white btn btn-nav-contact">
                        <img src="{{ asset('frontend/images/icons/nav/contact.svg') }}" width="18px" alt="" />
                        <span class="ms-1">Contact</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="blogMobileNavbar" class="sticky-top row w-100 mx-0 bg-black-100" style="z-index: 999; top: 50px">
    <div style="min-height: 25vh" class="p-4">
        <div class="d-flex justify-content-between">
            <ul class="navbar-nav pe-1 mb-md-0">
                <!-- ms-auto (EN)  |   me-auto (AR) -->
                <li class="nav-item mb-3">
                    <a href="{{ route('blogs') }}" type="button"
                        class="{{ request()->routeIs('blogs') ? 'active' : '' }} text-decoration-none fs-14px text-gray-400">Blog</a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('home') }}#portfolio" type="button"
                        class="text-decoration-none fs-14px text-gray-400">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}#contact" type="button"
                        class="text-decoration-none fs-14px text-white btn btn-nav-contact">
                        <img src="{{ asset('frontend/images/icons/nav/contact.svg') }}" width="18px" alt="" />
                        <span class="ms-1">Contact</span></a>
                </li>
            </ul>
            <div></div>
        </div>
    </div>

</div>
