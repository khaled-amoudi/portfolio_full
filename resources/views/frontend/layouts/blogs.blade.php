<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('frontend/images/icons/logo-single-light.svg') }}" type="image/x-icon">
    <title>𝗞𝗛𝗔𝗟𝗘𝗗 | @yield('title')</title>
    <meta name="description"
        content="Join me for the latest in web development and technology. From front-end design to back-end programming, stay up-to-date and improve your skills with my articles and tutorials.">
    <meta name="keywords"
        content="Web development, Software development, HTML, CSS, JavaScript, jQuery, Bootstrap, Tailwindcss, Responsive design, Cross-browser compatibility, Web standards, Content management systems (CMS), Search engine optimization (SEO), User experience (UX), Front-end framework (Vue js), Back-end framework (Php Laravel), E-commerce, Web accessibility, Web security, Object-oriented programming (OOP), Agile development, Database management, تصميم مواقع, تطوير أنظمة, مواقع ويب, مواقع إلكترونية, تحسين محركات البحث, أنظمة إدارة المحتوى, التوافق مع المتصفحات المختلفة">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="author" content="Khaled Musleh Al-Amoudi">
    <meta name="copyright" content="&copy; 2023 KHALED">



    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/blog.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Griffy&family=Unbounded:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Light.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Medium.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Regular.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Bold.ttf') }}" />

    <style>
        button[disabled] {
            pointer-events: none !important;
            cursor: not-allowed !important;
        }

        .pagination li.page-item,
        .pagination li.page-item {
            margin: auto auto auto 4px;
        }

        .page-item .page-link {
            color: #ffffffd3 !important;
            background-color: #1b1b1b;
            border-color: #1b1b1b;
            border-radius: 7px !important;
            font-weight: 400 !important;
            font-size: 12px;
        }

        .page-item.active .page-link {
            background-color: #9d446480 !important;
            border-color: #9d446480 !important;
            color: #fff !important;
        }

        .page-item.disabled .page-link {
            color: #ffffff30 !important;
            background-color: #171717;
            border-color: #171717;
            font-weight: 200 !important;
        }
    </style>

    <meta property="og:type" content="website">
    <meta property="og:url" content=""> <!-- website url -->
    <meta property="og:title" content="𝗞𝗛𝗔𝗟𝗘𝗗 | web development">
    <meta property="og:description"
        content="At KHALED, we build websites that help your business grow and attract more customers. With a focus on UX and SEO, Contact us today to achieve your business goals.">
    <meta property="og:image"
        content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content=""> <!-- website url -->
    <meta property="twitter:title" content="𝗞𝗛𝗔𝗟𝗘𝗗 | web development">
    <meta property="twitter:description"
        content="At KHALED, we build websites that help your business grow and attract more customers. With a focus on UX and SEO, Contact us today to achieve your business goals.">
    <meta property="twitter:image"
        content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

</head>

<body class="px-0">


    @if (session()->has('fail'))
        <div class="alert alert-dismissible fade show border-0 py-4"
            style="border-left: 6px solid #bd6981e3!important;
        background-color: #f4c8c8e3 !important;
        color: #540202; border-radius: 9px !important; position: absolute; bottom: 10px; right: 18px; z-index: 99999999;"
            role="alert">
            <div class="d-flex align-items-center">
                <small>{{ session('fail') }}</small>
                <div><button type="button" class="btn-close mt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif


    @yield('main')






    <noscript>You need to enable JavaScript to run this app.</noscript>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script-blog.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}


    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=63cf27ecd7982a0019bfb453&product=inline-reaction-buttons' async='async'></script>
    <script>
        $(document).ready(function() {
            $('.authors-club input[type="email"]').on('input', function() {
                var email = $(this).val();
                var isEmailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                $('.authors-club button[type="submit"]').prop('disabled', !isEmailValid);
            });
        });
    </script>
</body>

</html>
