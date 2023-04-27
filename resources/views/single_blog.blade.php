@extends('frontend.layouts.blogs')


@section('title', $blog->title)


@section('main')

    @include('frontend.partials.blogs.navbar')



    <div class="row mx-1 mx-sm-2 mx-md-3 mx-xxl-0 mt-3 mb-5">
        <div class="col-12 col-lg-8 px-0 pe-lg-1">
            <div class="single-blog card mx-0 bg-black-100 text-white">
                <div class="blog-image w-100 overflow-hidden rounded-1" style="height: 18rem">
                    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top w-100 h-100" title="{{ $blog->title }}" alt="{{ $blog->title }}" />
                </div>
                <div class="card-body px-1 px-sm-3 px-lg-4 px-xl-5 py-4" @if ($blog->lang == 'ar') dir="rtl" @endif>
                    <div class="card-title">
                        <div class="author mb-4">
                            <div
                                class="author-badge d-flex flex-column flex-sm-row justify-content-between align-items-sm-center">
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('storage/' . json_decode($blog->author_data)->avatar) }}" class="border-radius-smooth" width="40"
                                        height="40" alt="{{ json_decode($blog->author_data)->name }}" title="{{ json_decode($blog->author_data)->name }}" />
                                    <div class="d-flex flex-column">
                                        <span class="author-name fw-normal text-gray-300 fs-14px">{{ json_decode($blog->author_data)->name }}</span>
                                        <!-- fs-12px -->
                                        <span class="post-time fw-normal text-gray-200 fs-10px">posted {{ $blog->updated_at->diffForHumans() }}
                                            <span class="mx-2">.</span>{{ $blog->read_time }} min to read</span>
                                        <!-- fs-10px -->
                                    </div>
                                </div>
                                <div class="author-socials">
                                    <div class="d-flex mt-2 mt-sm-0 align-items-center">
                                        <span class="me-2 text-gray-300 fs-10px">@if ($blog->lang == 'ar') تابعني: @else follow: @endif</span>
                                        @isset(json_decode(json_decode($blog->author_data)->socials)->linkedin)
                                            <a target="_blank" href="{{ json_decode(json_decode($blog->author_data)->socials)->linkedin }}" class="text-gray-300 me-2"><i
                                                class="fs-5 fa-brands fa-linkedin"></i></a>
                                        @endisset

                                        @isset(json_decode(json_decode($blog->author_data)->socials)->twitter)
                                            <a target="_blank" href="{{ json_decode(json_decode($blog->author_data)->socials)->twitter }}" class="text-gray-300 me-2"><i
                                                class="fs-5 fa-brands fa-twitter"></i></a>
                                        @endisset
                                        @isset(json_decode(json_decode($blog->author_data)->socials)->instagram)
                                            <a target="_blank" href="{{ json_decode(json_decode($blog->author_data)->socials)->instagram }}" class="text-gray-300 me-2"><i
                                                class="fs-5 fa-brands fa-instagram"></i></a>
                                        @endisset
                                        @isset(json_decode(json_decode($blog->author_data)->socials)->github)
                                            <a target="_blank" href="{{ json_decode(json_decode($blog->author_data)->socials)->github }}" class="text-gray-300 me-2"><i
                                                class="fs-5 fa-brands fa-github"></i></a>
                                        @endisset

                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="fw-bolder blog-title-single text-main-gradient pb-3">
                            {{ $blog->title }}
                        </h1>
                        <!-- fs-1.8rem -->
                        <div class="tags text-white">
                            @foreach ($blog->tags as $tag)
                            <?php
                                $iteration = $loop->iteration <= 9 ? $loop->iteration : ($loop->iteration % 9);
                            ?>
                            <span dir="ltr" class="mt-1 badgee badgee-{{ $iteration }}"><span>#</span>{{ $tag->name }}</span>
                        @endforeach
                        </div>
                    </div>
                    <div class="blog-content mt-4-5">
                        <div class="blog-text letter-spacing-1px">
                            {!! $blog->body !!}
                        </div>
                        <hr class="mt-5" style="opacity: 0.07" />
                        <div class="like-share d-flex justify-content-between align-items-center">
                            <div class="sharethis-inline-reaction-buttons"
                                style="width: 35px; height: 35px; cursor: pointer"></div>
                            <div class="d-flex flex-column flex-sm-row align-items-sm-center">
                                <span class="fs-12px text-gray-300 fw-lighter me-2">
                                    @if ($blog->lang == 'ar') شارك: @else SHARE: @endif
                                </span>
                                <div class="addthis_inline_share_toolbox_ifam"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 px-0 ps-lg-1 pt-5 pt-lg-0">
            <div class="authors-club-parent w-100 ps-lg-2">
                <div class="authors-club bg-gradient-cameleon position-relative h-100 w-100 rounded">
                    <!--  border-radius-smooth -->
                    <div class="overlay p-3 p-md-4 rounded">
                        <!--  border-radius-smooth -->
                        <span class="text-white">
                            <span class="me-1 bg-gradient-primary">Join us!</span> Enter your email to stay updated to our
                            latest blog posts.
                        </span>
                        <form action="{{ route('settler.store') }}" method="POST">
                            @csrf
                            <div class="input-group mt-3">
                                    <input type="email" name="settler_email" class="form-control" placeholder="e.g. name@example.com"
                                        aria-label="e.g. name@example.com" aria-describedby="button-addon2">
                                    <button class="btn bg-gradient-cameleon-dark text-white fs-12px" type="submit"
                                        id="button-addon2">@if (! session()->has('success')) Subscribe 🚀  @else Done ✅ @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="read-also sticky-lg-top mt-2 ps-lg-2">
                <ul class="list-group">
                    <li
                        class="list-group-item bg-black-100 d-flex justify-content-between align-items-center fw-bold text-white px-1 px-sm-2 px-lg-4 py-3">
                        <div class="fs-14px fw-normal d-flex align-items-end">
                            <span><img src="{{ asset('frontend/images/icons/fire.svg') }}" width="25px" height="25px"
                                    alt="" /></span>
                            <span class="ms-1">Read also</span>
                        </div>
                        <div>
                            <a href="{{ route('blogs') }}" class="fs-14px fw-light text-white">see all</a>
                        </div>
                    </li>

                    @foreach ($latest_blogs as $blog)
                    <li class="list-group-item bg-black-100 fs-14px fw-light px-1 px-sm-2 px-lg-4 py-2 py-lg-3">
                        <a class="text-decoration-none text-gray-300 d-flex" href="{{ route('blog', $blog->slug) }}">
                            <div class="h-100">
                                <img src="{{ asset('storage/' . $blog->image) }}" class="border-radius-smooth" height="63px" width="60px"
                                    alt="" />
                            </div>
                            <span class="ps-3 {{ $blog->lang == 'ar' ? 'fw-bolder' : '' }}">{{ $blog->title }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @include('frontend.partials.blogs.footer')

@endsection
