<div class="about-body container-xxl pb-4 pb-md-0 mb-5 mb-md-0">
    <div class="px-sm-3">
        <div class="mt-md-4 d-none d-md-block position-relative">
            <div class="bg-blob position-absolute" style="left: 25%; top: 25%">
                <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px" class="blob-graph"
                    alt="" />
            </div>
            <div class="row">
                <div class="_cstm_wow_fadeInLeft col-12 col-md-6 h-md-100 d-flex align-items-center">
                    <h2 class="brief-desc text-gray-300 fw-light lh-sm letter-spacing-1px">
                        <span class="text-gradient-main fw-bolder prevent-selection"><i
                                class="fa-solid fa-terminal"></i></span>
                        A software engineer and full stack web developer who make websites
                        that people love, and I prioritize the quality of my work to be an
                        important element in the
                        <span class="bg-gradient-cameleon-dark">success of your project</span>
                        <span class="type-effect"></span>
                    </h2>
                </div>
                <div class="_cstm_wow_fadeInRight col-12 col-md-6 h-md-100 d-none d-md-block">
                    <div class="d-flex justify-content-end align-items-center">
                        <img src="{{ asset('frontend/images/random/about-programming.png') }}" width="386px"
                            height="386px" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="divider-mini"></div>

        <div class="cv">
            <div class="d-flex justify-content-center align-items-center">
                <div class="cv-card">
                    <div class="cv-card-item">
                        <div class="row p-2 p-sm-4 h-100">
                            <div class="col-12 col-md-8 fs-14px letter-spacing-2px text-white">
                                <p class="fs-6 fs-md-5 mt-5 mb-4 ms-2">Personal Information</p>
                                <p class="ms-2">
                                    <i class="fa-solid fa-user"></i><span class="fw-light ms-1 ms-sm-2">Khaled
                                        Amoudi</span>
                                </p>
                                <p class="ms-2">
                                    <i class="fa-solid fa-graduation-cap"></i><span
                                        class="fw-light ms-1 ms-sm-2">Bachelor In Software Engineering</span>
                                </p>
                                <p class="ms-2">
                                    <i class="fa-solid fa-envelope"></i><span
                                        class="fw-light ms-1 ms-sm-2">khaled.amoudi00@gmail.com</span>
                                </p>
                                <p class="ms-2">
                                    <i class="fa-solid fa-phone"></i><span
                                        class="fw-light ms-1 ms-sm-2">+972597173494</span>
                                </p>
                                <p class="ms-2">
                                    <span class="fw-light">Freelance Status: <span
                                            class="badge py-2 fw-normal bg-success-light">Open</span></span>
                                </p>
                            </div>
                            <div class="cv-download col-12 col-md-4 my-5 my-md-0"
                                style="
                  border-left: 1px solid #ffffff26;
                  pointer-events: none;
                ">
                                <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <a href="{{ route('download.pdf') }}" type="button" class="btn btn-cv fs-12px py-3 fw-light letter-spacing-2px text-white"
                                        style="pointer-events: auto">
                                        <i class="fa-solid fa-download"></i> CV Download
                                    </a>
                                    <button
                                        class="btn btn-outline-cv fs-12px py-3 fw-light letter-spacing-2px text-white mt-3"
                                        data-bs-toggle="modal" data-bs-target="#readCvModal"
                                        style="pointer-events: auto">
                                        <span>Read CV</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal of Preview backend projects -->
        <div class="modal fade" id="readCvModal" tabindex="-1" aria-labelledby="readCvModalLabel" aria-hidden="true">
            <div class="modal-dialog rounded modal-dialog-scrollable modal-xl bg-black-100">
                <div class="modal-content h-100 bg-black-100 text-white">
                    <div class="modal-header py-2 letter-spacing-1px text-gray-300">
                        <h5 class="modal-title fw-normal" id="readCvModalLabel">
                            CV
                        </h5>
                        <button type="button" class="btn-close bg-white rounded-circle" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Gallery -->
                        <div class="row h-100">
                            <embed src="{{ asset('frontend/images/cv/khaled-amoudi-cv.pdf') }}" type="application/pdf"
                                width="100%" height="100%" />
                        </div>
                        <!-- Gallery -->
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>

        <div class="skills">
            <div class="fs-4 fs-md-4 border-bottom text-gray-300">Skills & Tools</div>
            <div class="skills-list position-relative">
                <div class="bg-blob position-absolute" style="left: 25%; top: 25%">
                    <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                        class="blob-graph" alt="" />
                </div>
                <div class="row px-2">
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card test p-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/figma.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Figma</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/html.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">HTML</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/css.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">CSS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/sass.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Sass</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/javascript.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">JavaScript</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/jquery.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">JQuery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/bootstrap.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Bootstrap</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/tailwindcss.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Tailwindcss</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/vue.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Vuejs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2 mt-4">
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/laravel.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">PHP Laravel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/mysql.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/laravel-and-vue.png') }}"
                                        class="rounded" width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Vuejs + Laravel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/ajax.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Ajax</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/postman.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Postman Api</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/git.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Git</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/cpanel.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Cpanel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2 mt-4">
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/clickup.svg') }}"
                                        class="rounded clickup" width="40px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Clickup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/trello.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Trello</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/jira.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Jira</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/staruml.png') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">StarUml</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-3 col-md-2 px-1">
                        <div class="card px-0 py-2 p-sm-2 bg-black-100 mt-2">
                            <div class="row">
                                <div
                                    class="col-12 col-sm-4 d-flex justify-content-center justify-content-sm-start justify-content-sm-start">
                                    <img src="{{ asset('frontend/images/skills/sourcetree.svg') }}" class="rounded"
                                        width="50px" height="40px" alt="" />
                                </div>
                                <div
                                    class="col-12 col-sm-8 mt-1 mt-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center">
                                    <span class="text-white text-center text-sm-start fs-12px fw-light letter-spacing-1px">Sourcetree</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="experiences mb-5">
            <div class="fs-4 fs-md-4 border-bottom text-gray-300">The Khaled Experience</div>
            <!-- <span class="fs-14px letter-spacing-2px">(The Journey)</span> -->

            <div class="experiences-list mt-4 position-relative">
                <div class="bg-blob position-absolute" style="left: 25%; top: 15%">
                    <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                        class="blob-graph" alt="" />
                </div>
                <div class="bg-blob position-absolute" style="right: 25%; top: 80%">
                    <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px"
                        class="blob-graph" alt="" />
                </div>
                <div class="row px-2 pb-md-5 mb-md-5">
                    <div class="col-12 col-md-6 opacity-transition">
                        <div class="circle rounded-circle bg-gradient-cameleon"
                            style="margin-left: -10px; width: 20px; height: 20px"></div>
                        <div class="exp exp-border h-100 fw-light letter-spacing-1px p-3">
                            <span class="pj-company text-gray-300 fs-20px">Software Engineer - BackEnd Web Developer
                                (Internship)</span>
                            <div class="pj-title text-gray-200 mt-2">
                                <span><a href="https://palwakf.ps/ar/" target="_blank" class="text-gray-200">Al-Awkaf
                                        ministry</a></span>
                                <span class="mx-2">&#x2022;</span>
                                <span class="badge fw-light bg-gradient-cameleon-dark">March 2023 - Present</span>
                            </div>
                            <ul class="responsibilities text-gray-200 mt-4" style="padding-left: 1rem !important">
                                <li>Engineers developing a social media platform to unite Palestinian supporters and
                                    further their cause.</li>
                                <li>Developing and maintaining web applications using Laravel PHP framework.</li>
                                <li>Writing clean, efficient, and maintainable code using best practices.</li>
                                <li>Designing and implementing database schema and queries to ensure fast and efficient
                                    data access.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 opacity-transition">
                        <div class="circle rounded-circle bg-gradient-cameleon"
                            style="margin-left: -10px; width: 20px; height: 20px"></div>
                        <div class="exp exp-border h-100 fw-light letter-spacing-1px p-3">
                            <span class="pj-company text-gray-300 fs-20px">Software Engineer - FullStack Web
                                Developer</span>
                            <div class="pj-title text-gray-200 mt-2">
                                <span>4palestine (startup company)</span>
                                <span class="mx-2">&#x2022;</span>
                                <span class="badge fw-light bg-gradient-cameleon-dark">Nov 2022 - Present</span>
                            </div>
                            <ul class="responsibilities text-gray-200 mt-4" style="padding-left: 1rem !important">
                                <li>Engineers developing a social media platform to unite Palestinian supporters and
                                    further their cause.</li>
                                <li>Developing software using Hybrid (Agile + Waterfall) methodology, from requirements
                                    to deployment.</li>
                                <li>Optimize web applications for performance and scalability.</li>
                                <li>Building and maintaining RESTful APIs and web services for external consumption.
                                </li>
                                <li>Managing software projects with methodology and tools like Slack, Github, Google
                                    Meet, and Jira for effective communication.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 opacity-transition">
                        <div class="circle rounded-circle bg-gradient-cameleon"
                            style="margin-left: -10px; width: 20px; height: 20px"></div>
                        <div class="exp exp-border h-100 fw-light letter-spacing-1px p-3">
                            <span class="pj-company text-gray-300 fs-20px">BackEnd Web Developer</span>
                            <div class="pj-title text-gray-200 mt-2">
                                <span><a href="https://nawagrow.com/" target="_blank"
                                        class="text-gray-200">Nawagrow</a></span>
                                <span class="mx-2">&#x2022;</span>
                                <span class="badge fw-light bg-gradient-cameleon-dark">Sep 2022 – Jan 2023</span>
                            </div>
                            <ul class="responsibilities text-gray-200 mt-4" style="padding-left: 1rem !important">
                                <li>Designing and implementing scalable and reliable web applications and services.</li>
                                <li>Design RESTful APIs to support mobile clients.</li>
                                <li>Participating in the full software development life cycle, including requirements
                                    gathering, design, coding, testing, and deployment.</li>
                                <li>Following Agile methodology to manage software development projects, using Clickup
                                    software.</li>
                                <li>Some of the products: <a href="https://mohrkeyshop.com/" target="_blank"
                                        class="text-gray-200">mohrkey</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 opacity-transition">
                        <div class="circle rounded-circle bg-gradient-cameleon"
                            style="margin-left: -10px; width: 20px; height: 20px"></div>
                        <div class="exp exp-border h-100 fw-light letter-spacing-1px p-3">
                            <span class="pj-company text-gray-300 fs-20px">Full Stack Web Developer</span>
                            <div class="pj-title text-gray-200 mt-2">
                                <span>Freelancer</span>
                                <span class="mx-2">&#x2022;</span>
                                <span class="badge fw-light bg-gradient-cameleon-dark">April 2022 – Present</span>
                            </div>
                            <ul class="responsibilities text-gray-200 mt-4" style="padding-left: 1rem !important">
                                <li>Designing and analyzing systems, and optimizing database queries and schema design.
                                </li>
                                <li>Developing and maintaining the front end of web applications using HTML, CSS,
                                    Bootstrap, JavaScript, etc...</li>
                                <li>Developing and maintaining responsive web designs that work well on desktop and
                                    mobile devices to suit all screens.</li>
                                <li>provide a positive user experience and are easy to use.</li>
                                <li>Design RESTful APIs to support mobile clients.</li>
                                <li>Staying up-to-date with the latest web technologies for both front-end and back-end
                                    updates to continuously improve development processes and code quality.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.partials.socials')
    </div>
</div>
