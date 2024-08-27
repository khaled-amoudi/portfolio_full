<div class="contact-body">

    @if (session()->has('success'))
        <div class="alert alert-dismissible fade show border-0 py-4"
            style="border-left: 6px solid #6cb39be3!important;
    background-color: #cffcebe3 !important; color: #0f4a34; border-radius: 9px !important; position: absolute; bottom: 10px; right: 40px; z-index: 99999999;"
            role="alert">
            <div class="d-flex align-items-center">
                <small>{{ session('success') }}</small>
                <div><button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('fail'))
        <div class="alert alert-dismissible fade show border-0 py-4 w-50"
            style="border-left: 6px solid #bd6981e3!important;
            background-color: #f4c8c8e3 !important;
            color: #540202; border-radius: 9px !important; position: absolute; bottom: 10px; right: 40px; z-index: 99999999;"
            role="alert">
            <div class="d-flex align-items-center">
                <small>{{ session('fail') }}</small>
                <div><button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif


    <div class="blobs-container position-relative d-none d-md-block" style="max-height: 100vh !important">
        <div class="blob blob1 position-absolute" style="left: 45%; top: 45%">
            <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="150px" height="150px" class="blob-graph"
                alt="" />
        </div>
        <div class="blob blob2 position-absolute" style="left: 45%; top: 45%">
            <img src="{{ asset('frontend/images/blobs/blob2.svg') }}" width="150px" height="150px" class="blob-graph"
                alt="" />
        </div>
        <div class="blob blob3 position-absolute" style="left: 45%; top: 45%">
            <img src="{{ asset('frontend/images/blobs/blob3.svg') }}" width="200px" height="200px" class="blob-graph"
                alt="" />
        </div>
        <div class="blob blob4 position-absolute" style="left: 45%; top: 45%">
            <img src="{{ asset('frontend/images/blobs/blob4.svg') }}" width="150px" height="150px" class="blob-graph"
                alt="" />
        </div>
    </div>
    <section class="contact py-2 container d-flex align-items-md-center overflow-hidden position-relative"
        style="min-height: 100vh">
        <div class="bg-blob position-absolute d-block d-md-none" style="right: 15%; top: 10%">
            <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px" class="blob-graph"
                alt="" />
        </div>
        <div class="bg-blob position-absolute d-block d-md-none" style="left: 15%; bottom: 10%">
            <img src="{{ asset('frontend/images/blobs/blob1.svg') }}" width="200px" height="200px" class="blob-graph"
                alt="" />
        </div>
        <div class="card my-5 my-md-0 w-100" style="min-height: 77vh; background-color: #4b4b4b45">
            <div class="row h-100">
                <div class="form-section col-12 col-md-8 p-4 p-md-5">
                    <h6 class="text-center mb-4 mb-md-0 text-white">
                        Let's Talk About Your Project
                    </h6>
                    <form class="row g-3 mt-2" method="POST" action="{{ route('postContact') }}">
                        @csrf

                        <div class="col-12">
                            <div class="form-floating mb-1 mb-md-3">
                                <input type="text" name="name" class="form-control border-0 rounded-1"
                                    id="name" required />
                                <label for="name"><i class="me-2 fa-solid fa-user"></i> Full name *</label>
                            </div>
                            @error('name')
                                <small class="text-dangerr fs-12px">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-1 mb-md-3">
                                <input type="email" name="email_address" class="form-control border-0 rounded-1"
                                    id="email" placeholder="name@example.com" required />
                                <label for="email"><i class="me-2 fa-solid fa-envelope"></i> Email address
                                    *</label>
                            </div>
                            @error('email_address')
                                <small class="text-dangerr fs-12px">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-1 mb-md-3">
                                <input type="text" name="phone_number" class="form-control border-0 rounded-1"
                                    id="phone_number" />
                                <label for="phone_number"><i class="me-2 fa-solid fa-phone"></i> Phone number
                                    (optional)</label>
                            </div>
                            @error('phone_number')
                            <small class="text-dangerr fs-12px">{{ $message }}</small>
                        @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-1 mb-md-3">
                                <textarea name="message" class="form-control border-0 rounded-1" style="height: 20vh"
                                    placeholder="Leave the topic here" id="message"></textarea>
                                <label for="message"><i class="me-2 fa-solid fa-message"></i> Message
                                    (optional)</label>
                            </div>
                            @error('message')
                            <small class="text-dangerr fs-12px">{{ $message }}</small>
                        @enderror
                        </div>

                        <div class="col-12 d-flex justify-content-center mt-4 mt-md-0">
                            <button
                                class="btn btn-submit bg-gradient-cameleon text-white fs-12px d-flex justify-content-center align-items-center"
                                type="submit">
                                <span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="other-contact-section col-12 col-md-4 my-5 px-5" style="border-color: #292929 !important">
                    <div class="h-75 text-center text-white fs-12 d-flex flex-column justify-content-between">
                        <div>
                            <span class="fs-14px letter-spacing-2px">OR</span>
                            <p class="mt-3 fs-12px letter-spacing-1px text-gray-300">
                                we can contact through the following communication channels.
                            </p>
                            <div class="communications d-flex justify-content-center">
                                <span><a href="https://www.linkedin.com/in/khaledamoudi/" target="_blank"><img
                                            src="{{ asset('frontend/images/icons/linkedin.svg') }}" width="40px"
                                            height="40px" alt="linkedin" /></a></span>
                                <span><a href="https://wa.me/201067107081" target="_blank"><img
                                            src="{{ asset('frontend/images/icons/watsapp.svg') }}" width="40px"
                                            height="40px" alt="watsapp" /></a></span>
                                <span><a href="https://mail.google.com/mail/?view=cm&fs=1&to=khaled.amoudi00@gmail.com&subject=Subject%20Here"
                                        target="_blank"><img src="{{ asset('frontend/images/icons/gmail.svg') }}"
                                            width="40px" height="40px" alt="gmail" /></a></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5 mt-md-0 align-items-center">
                            <img src="{{ asset('frontend/images/icons/logo-slug-light.svg') }}" width="100px"
                                height="100px" alt="" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
