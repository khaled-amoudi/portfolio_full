<div class="portfolio-body pb-4 pb-md-0 mb-5 mb-md-0">
    <section class="portfolio container text-center">
        <div class="row">
            <div class="col-12">
                <div class="header position-relative">
                    <div class="bg-blob position-absolute" style="right: 5%; top: 5%">
                        <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                            class="blob-graph" alt="" />
                    </div>
                    <!-- <h4 class="text-uppercase">The portfolio</h4> -->
                    <h4 class="text-uppercase text-gradient-cameleon">Portfolio</h4>
                    <div class="d-flex justify-content-center">
                        <p class="text-gray-300 letter-spacing-1px w-50">
                            Lets make your project be the next one to add to this list by
                            <span
                                class="contact-span position-relative text-white cursor-pointer routeContactPage">contact
                                me</span>
                        </p>
                    </div>
                    <div class="mt-3 mt-sm-5 d-flex justify-content-center">
                        <div class="rounded-pill p-1 portfolio-switch d-flex justify-content-between">
                            <button id="front"
                                class="btn px-3 py-2 rounded-pill border-0 fs-12px text-white bg-gradient-cameleon">
                                Front-end
                            </button>
                            <button id="back" class="btn px-3 py-2 rounded-pill border-0 fs-12px text-white">
                                Back-end
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="content mx-md-5 px-md-5 mt-5 position-relative">
                    <div class="bg-blob position-absolute" style="left: 0%; top: 10%">
                        <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                            class="blob-graph" alt="" />
                    </div>
                    <div class="bg-blob position-absolute" style="right: 0%; bottom: 0%">
                        <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                            class="blob-graph" alt="" />
                    </div>
                    <div id="front-end-projects">
                        <div class="row">
                            @foreach ($frontend_projects as $project)
                                <div class="col-12 col-sm-6 col-lg-4 mt-3 mt-sm-0 p-4">
                                    <a class="text-decoration-none" target="_blank" href="{{ $project->project_link }}">
                                        <div class="card front-card bg-transparent border-0">
                                            <div class="img-container rounded overflow-hidden">
                                                <div class="img w-100 rounded position-relative"
                                                    style="background-image: url({{ asset('storage/' . $project->project_image) }});">
                                                    <div class="overlay rounded"></div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-start mt-2 mt-sm-3">
                                                <p class="project-title text-white fs-14px text-start">
                                                    {{ $project->project_name }}
                                                </p>
                                                <a href="{{ $project->project_link }}" class="d-none d-sm-block ms-2"><i
                                                        class="project-link fa-solid fa-link text-white"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="back-end-projects">
                        <div class="row">
                            @foreach ($backend_projects as $project)
                                <div class="col-12 mb-2">
                                    <div class="card back-card text-white text-start bg-black-100 mb-3 p-3 p-sm-4">
                                        <p class="project-title text-gray-400 letter-spacing-1px">
                                            # {{ $project->project_name }}
                                        </p>
                                        <span
                                            class="project-description ps-2 text-gray-300 fs-14px letter-spacing-1px fw-light">
                                            {{ $project->backendProject->description }}
                                        </span>

                                        <div class="mt-4 row">
                                            <div class="col-12 col-lg-8 mt-2 mt-lg-0">
                                                <div class="card h-100 p-2 p-sm-3 fs-14px bg-black w-100">
                                                    <span class="text-gray-300">🚀 Responsibilities &
                                                        Characteristics:</span>
                                                    <hr style="opacity: 0.1" />
                                                    <ul class="fw-light text-gray-200">
                                                        @foreach (json_decode($project->backendProject->characteristics_list) as $item)
                                                            <li class="{{ $loop->last ? '' : 'mb-1' }}">
                                                                {{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4 mt-2 mt-lg-0">
                                                <div class="card h-100 p-2 p-sm-3 fs-14px bg-black w-100">
                                                    <span class="text-gray-300">🛠️ Tools & technologies:</span>
                                                    <hr style="opacity: 0.1" />
                                                    <ul class="fw-light text-gray-200">
                                                        @foreach (json_decode($project->backendProject->tools_list) as $item)
                                                            <li class="{{ $loop->last ? '' : 'mb-1' }}">
                                                                {{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="actions mt-3">
                                            @isset($project->project_link)
                                                <a href="{{ $project->project_link }}" target="_blank" type="button"
                                                    class="btn text-white bg-gradient-cameleon-dark fs-12px fw-light mb-2 mb-md-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('frontend/images/icons/preview.svg') }}"
                                                            class="me-2" width="19px" alt="" /><span>
                                                            Live Preview</span>
                                                    </div>
                                                </a>
                                            @endisset

                                            @isset($project->backendProject->mockups)
                                                <!-- Button trigger modal -->
                                                <button type="button"
                                                    class="btn text-white bg-gradient-cameleon-dark fs-12px fw-light mb-2 mb-md-0"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#mockupsModal{{ $project->backendProject->id }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('frontend/images/icons/grid.png') }}"
                                                            class="me-2" width="19px" alt="" />
                                                        <span>Project showcase</span>
                                                    </div>
                                                </button>

                                                <!-- Modal of Preview backend projects -->
                                                <div class="modal fade" id="mockupsModal{{ $project->backendProject->id }}"
                                                    tabindex="-1"
                                                    aria-labelledby="mockupsModal{{ $project->backendProject->id }}Label"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl bg-black-100">
                                                        <div class="modal-content bg-black-100 text-white">
                                                            <div
                                                                class="modal-header py-2 letter-spacing-1px text-gray-300">
                                                                <h5 class="modal-title fw-normal"
                                                                    id="mockupsModal{{ $project->backendProject->id }}Label">
                                                                    Preview Project ( screenshots )
                                                                </h5>
                                                                <button type="button"
                                                                    class="btn-close bg-white rounded-circle"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Gallery -->
                                                                <div class="row">
                                                                    @foreach (json_decode($project->backendProject->mockups) as $mockup)
                                                                        <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                                                                            <img src="{{ asset('storage/' . $mockup) }}"
                                                                                class="w-100 shadow-1-strong rounded mb-4" />
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <!-- Gallery -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endisset

                                            @isset($project->backendProject->github_repo_link)
                                                <a href="{{ $project->backendProject->github_repo_link }}"
                                                    target="_blank" type="button"
                                                    class="btn text-white bg-black fs-12px fw-light mb-2 mb-md-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('frontend/images/icons/github.svg') }}"
                                                            class="me-2" width="20px" alt="" /><span> Github
                                                            Repository</span>
                                                    </div>
                                                </a>
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-xxl">
        <section class="social-section position-relative">
            <div class="bg-blob position-absolute" style="right: 45%; top: 45%">
                <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                    class="blob-graph" alt="" />
            </div>
            <h3 class="mb-3 mb-md-4 w-100 w-sm-50 text-gray-300 text-md-center">
                <span class="text-gradient-main">Let's Talk</span> About Your
                Project 😉
            </h3>
            <div class="row">
                <div class="mt-3 col-6 col-sm-3 col-md-2 offset-md-2">
                    <a href="https://www.upwork.com/freelancers/~019f0db70103a732c8" target="_blank"
                        class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
              background-image: url({{ asset('frontend/images/icons/upwork-social-card.webp') }});
              height: 60px;
            ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Upwork</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-3 col-6 col-sm-3 col-md-2">
                    <a href="https://www.freelancer.com/u/khaledAmoudi" target="_blank" class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
              background-image: url({{ asset('frontend/images/icons/freelancer-social-card.webp') }});
              height: 60px;
            ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Freelancer</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-3 col-6 col-sm-3 col-md-2">
                    <a href="https://mostaql.com/u/Khaled_Amoudi" target="_blank" class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
              background-image: url({{ asset('frontend/images/icons/mostaqel-social-card.png') }});
              height: 60px;
            ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Mostaqel</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-3 col-6 col-sm-3 col-md-2">
                    <a href="https://www.linkedin.com/in/khaledamoudi/" target="_blank" class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
                    background-image: url({{ asset('frontend/images/icons/linkedin-social-card.png') }});
                    height: 60px;
                  ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Linkedin</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="mt-3 col-6 col-sm-3 col-md-2 offset-md-3">
                    <a href="https://twitter.com/Khaledamoudii" target="_blank" class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
                    background-image: url({{ asset('frontend/images/icons/twitter-social-card.jpg') }});
                    height: 60px;
                  ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Twitter</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-3 col-6 col-sm-3 col-md-2">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=khaled.amoudi00@gmail.com&subject=Subject%20Here&body=Hi%20Khaled,"
                        target="_blank" class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
                    background-image: url({{ asset('frontend/images/icons/gmail-social-card.png') }});
                    height: 60px;
                  ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Gmail</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-3 col-6 col-sm-3 col-md-2">
                    <a href="https://wa.me/972597173494?text=Hi Khaled, " target="_blank"
                        class="text-decoration-none">
                        <div class="card account-card bg-black-100 border-0 w-100">
                            <div class="img w-100 position-relative"
                                style="
                    background-image: url({{ asset('frontend/images/icons/whatsapp-social-card.jpg') }});
                    height: 60px;
                  ">
                                <div class="overlay"></div>
                            </div>
                            <div class="card-body text-center py-1 py-sm-2 px-0">
                                <span class="fs-12px fw-light text-white">Whatsapp</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
