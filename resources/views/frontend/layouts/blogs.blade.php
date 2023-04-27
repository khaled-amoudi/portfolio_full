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

</head>

<body class="container-xxl px-0">


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
    <script src="{{ asset('frontend/js/script-blog.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63cf2966e597149d"></script>
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=63cf280fd7982a0019bfb454&product=inline-reaction-buttons&source=platform"
        async="async"></script>
</body>

</html>
