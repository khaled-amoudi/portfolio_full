<div class="main-body">
    <main class="container-xxl" style="height: 100vh !important">
        <div class="overflow-hidden row h-100 mx-0 position-relative">
            {{-- <div class="bg-blob position-absolute d-block d-md-none" style="right: 5%; top: 25%">
                <img src="http://khaled_portfolio.test/frontend/images/blobs/blob1.svg" width="100px" height="100px" class="blob-graph" alt="">
            </div> --}}
            <div class="bg-blob position-absolute d-block d-md-none" style="left: 5%; bottom: 20%">
                <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px" class="blob-graph" alt="">
            </div>
            <div class="position-absolute d-block d-md-none" style="width: 65%; right: 0%; bottom: 15%; z-index: -999; opacity: 0.18; transform: rotate(-4deg);">
                <img src="{{ asset('frontend/images/random/arabi-03.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex p-2 pt-4 p-sm-5 h-100 flex-column">
                    <div class="name">
                        <h2 class="text-capitalize prevent-selection _cstm_wow_fadeInBottom" style="font-size: 100px; font-weight: bold;" id="name">
                            khaled amoudi
                        </h2>
                        <div class="mt-4 _cstm_wow_fadeInLeft">
                            <code>
                                <pre class="fw-bold fs-14px my-0"><span style="color: #5ca4c0 !important;">&lt;</span><span style="color: #d86360 !important;">h3</span><span style="color: #5ca4c0 !important;">&gt;</span></pre>
                            </code>
                            <p class="ms-3 ps-2 my-0 letter-spacing-1px">
                                Software Engineer Specializing <br />
                                In Web Development
                            </p>
                            <code>
                                <pre class="fw-bold fs-14px my-0"><span style="color: #5ca4c0 !important;">&lt;/</span><span style="color: #d86360 !important;">h3</span><span style="color: #5ca4c0 !important;">&gt;</span></pre>
                            </code>

                            {{-- <div class="position-relative d-block d-md-none">
                                <img src="{{ asset('frontend/images/random/vscode-screenshot1.png') }}"
                                    style="opacity: .18; transform: skewX(0deg); margin-top: -150px; z-index: -1;"
                                    class="back-image position-absolute w-100" height="300px" alt="">
                            </div> --}}

                        </div>
                    </div>
                    <div class="my-md-5 pt-md-3 d-none d-md-block">
                        <div class="pages fixed-top d-flex align-items-center">
                            <div class="homePage rounded-circle p-4 d-flex justify-content-around align-items-center">
                                <img src="{{ asset('frontend/images/icons/home.gif') }}" width="40"
                                    height="40" alt="" />
                            </div>
                            <div
                                class="routeAboutPage aboutPage rounded-circle p-4 ms-1 d-flex justify-content-around align-items-center">
                                About
                            </div>
                            <div
                                class="routePortfolioPage portfolioPage rounded-circle p-4 ms-1 d-flex justify-content-around align-items-center">
                                Portfolio
                            </div>
                            <div
                                class="routeContactPage contactPage rounded-circle p-4 ms-1 d-flex justify-content-around align-items-center">
                                Contact
                            </div>
                            <div
                                class="blogPage rounded-circle p-4 ms-1 d-flex justify-content-around align-items-center">
                                <a href="{{ route('blogs') }}" target="_blank"
                                    class="text-decoration-none text-black">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-none d-lg-block col-lg-6">
                <div class="main-img _cstm_wow_fadeInRight position-relative p-5 d-flex justify-content-end">
                        <img src="{{ asset('frontend/images/test/persona2.jpeg') }}" style="opacity: 0.5" class="back-image w-100" alt="">

                        <div class="w-100" style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;"></div>


                    {{-- <div class="spot-light">
                        <img src="{{ asset('frontend/images/test/persona.png') }}" class="w-100" alt="">
                    </div> --}}

                    {{-- <img class="back-image position-absolute" width="390" height="480"
                        src="{{ asset('frontend/images/test/me.jpeg') }}" alt="" /> --}}
                </div>
            </div>
            <div class="col-12 d-block d-md-none col-lg-6 pb-sm-3">
                <h6 class="brief-desc px-2 px-sm-5 text-gray-300 fw-light lh-sm letter-spacing-1px">
                    <span class="text-gradient-main fw-bolder prevent-selection"><i
                            class="fa-solid fa-terminal"></i></span>
                    A software engineer and full stack web developer who make websites
                    that people love, and I prioritize the quality of my work to be an
                    important element in the
                    <span class="bg-gradient-cameleon-dark">success of your project</span>
                    <span class="type-effect"></span>
                </h6>
            </div>
        </div>
    </main>
</div>
