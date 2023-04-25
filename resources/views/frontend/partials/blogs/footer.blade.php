<div class="bg-black-100" style="margin-top: 4rem;">
    <footer class="container py-5">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('frontend/images/icons/logo-slug-light.svg') }}" width="100px" height="70px"
                alt="">
        </div>
        <ul class="nav justify-content-center mt-4-5 fw-light fs-14px">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-gray-300">Home</a></li>
            <li class="nav-item"><a href="{{ route('home') }}#portfolio"
                    class="nav-link px-2 text-gray-300">Portfolio</a>
            </li>
            <li class="nav-item"><a href="{{ route('home') }}#about" class="nav-link px-2 text-gray-300">About
                    Me</a></li>
            <li class="nav-item"><a href="{{ route('home') }}#contact" class="nav-link px-2 text-gray-300">Contact</a>
            </li>
            <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link px-2 text-gray-300">Blog</a>
            </li>
        </ul>
    </footer>
</div>
