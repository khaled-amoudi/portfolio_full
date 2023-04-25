@extends('frontend.layouts.blogs')

@section('title', 'Blog')

@section('main')


    @include('frontend.partials.blogs.navbar')

    <div class="row mx-2 mx-md-3 mx-xxl-0 mt-3 mb-5">

        <div class="col-12 col-lg-8 px-0 pe-lg-1">
            @foreach ($blogs as $blog)
                <div class="blog-cards card mx-0 mb-3 mb-lg-2 bg-black-100 text-white">
                    <div class="card-body px-2 px-sm-3 px-lg-5 py-3 py-md-4">
                        <!-- auther + read min -->
                        <div class="author mb-4">
                            <div
                                class="author-badge d-flex flex-column flex-sm-row justify-content-between align-items-sm-center">
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('storage/' . json_decode($blog->author_data)->avatar) }}"
                                        class="border-radius-smooth" width="40" height="40" alt="">
                                    <div class="d-flex flex-column">
                                        <span
                                            class="author-name fw-normal text-gray-300 fs-14px">{{ json_decode($blog->author_data)->name }}</span>
                                        <!-- fs-12px -->
                                        <span class="post-time fw-normal text-gray-200 fs-10px">posted
                                            {{ $blog->updated_at->diffForHumans() }}<span class="mx-2">.</span>
                                            {{ $blog->read_time }} min to read</span> <!-- fs-10px -->
                                    </div>
                                </div>
                                <div class="author-socials">
                                    <div class="d-flex mt-2 mt-sm-0 align-items-center">
                                        <span class="me-2 text-gray-300 fs-10px">follow:</span> <!-- remove it -->
                                        @isset(json_decode(json_decode($blog->author_data)->socials)->linkedin)
                                            <a target="_blank"
                                                href="{{ json_decode(json_decode($blog->author_data)->socials)->linkedin }}"
                                                class="text-gray-300 me-2"><i class="fs-5 fa-brands fa-linkedin"></i></a>
                                        @endisset

                                        @isset(json_decode(json_decode($blog->author_data)->socials)->twitter)
                                            <a target="_blank"
                                                href="{{ json_decode(json_decode($blog->author_data)->socials)->twitter }}"
                                                class="text-gray-300 me-2"><i class="fs-5 fa-brands fa-twitter"></i></a>
                                        @endisset

                                        @isset(json_decode(json_decode($blog->author_data)->socials)->instagram)
                                            <a target="_blank"
                                                href="{{ json_decode(json_decode($blog->author_data)->socials)->instagram }}"
                                                class="text-gray-300 me-2"><i class="fs-5 fa-brands fa-instagram"></i></a>
                                        @endisset

                                        @isset(json_decode(json_decode($blog->author_data)->socials)->github)
                                            <a target="_blank"
                                                href="{{ json_decode(json_decode($blog->author_data)->socials)->github }}"
                                                class="text-gray-300 me-2"><i class="fs-5 fa-brands fa-github"></i></a>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- blog title -->
                        <a href="{{ route('blog', $blog->slug) }}">
                            <h1 class="blog-title text-main-gradient prevent-selection {{ $blog->lang == 'ar' ? 'fw-bolder' : '' }}">{{ $blog->title }}<span>...</span>
                            </h1>
                        </a> <!-- fs-1.8rem -->

                        <!-- tags  -->
                        <div class="tags text-white mt-3">
                            @foreach ($blog->tags as $tag)
                                <?php
                                    $iteration = $loop->iteration <= 9 ? $loop->iteration : ($loop->iteration % 9);
                                ?>
                                <span class="mt-1 badgee badgee-{{ $iteration }}"><span>#</span>
                                    {{ $tag->name }}</span>
                            @endforeach
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-12 col-lg-4 px-0 ps-lg-1 pt-4 pt-lg-0">
            <div class="authors-club-parent w-100 ps-lg-2">
                <div class="authors-club bg-gradient-cameleon position-relative h-100 w-100 rounded">
                    <!--  border-radius-smooth -->
                    <div class="overlay p-3 p-md-4 rounded">
                        <!--  border-radius-smooth -->
                        <span class="text-white">
                            <span class="me-1 bg-gradient-primary">Join us!</span> Enter your email to stay updated to our
                            latest blog posts.
                        </span>
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" placeholder="e.g. name@example.com"
                                aria-label="e.g. name@example.com" aria-describedby="button-addon2">
                            <button class="btn bg-gradient-cameleon-dark text-white fs-12px" type="button"
                                id="button-addon2">Subscribe 🚀</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="read-also sticky-lg-top mt-2 ps-lg-2">
                <div class="card bg-black-100">
                    <div class="card-header fs-14px fw-normal text-white px-2 px-sm-3 px-md-4 py-2 py-md-3">
                        Tags ( {{ $tags_count }} )
                    </div>
                    <div class="card-body fw-normal text-white px-2 px-sm-3 px-md-4 py-2 py-md-3">
                        @foreach ($tags as $tag)
                            <span class="badge bg-black rounded-pill mt-2 me-1 px-2 px-sm-3 py-2 fs-12px fw-light">{{ $tag->name }} ( {{ $tag->blogs_count }} )</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.blogs.footer')
@endsection
