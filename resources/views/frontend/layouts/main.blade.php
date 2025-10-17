<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Khaled Musleh Al-Amoudi - khaled.amoudi00@gmail.com - 2023 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>𝗞𝗛𝗔𝗟𝗘𝗗 | web development</title>
    <meta name="description"
        content="At KHALED, we build websites that help your business grow and attract more customers. With a focus on UX and SEO, Contact us today to achieve your business goals.">
    <meta name="keywords"
        content="Web development, Software development, HTML, CSS, JavaScript, jQuery, Bootstrap, Tailwindcss, Responsive design, Cross-browser compatibility, Web standards, Content management systems (CMS), Search engine optimization (SEO), User experience (UX), Front-end framework (Vue js), Back-end framework (Php Laravel), E-commerce, Web accessibility, Web security, Object-oriented programming (OOP), Agile development, Database management, تصميم مواقع, تطوير أنظمة, مواقع ويب, مواقع إلكترونية, تحسين محركات البحث, أنظمة إدارة المحتوى, التوافق مع المتصفحات المختلفة">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="author" content="Khaled Musleh Al-Amoudi">
    <meta name="copyright" content="&copy; 2023 KHALED">
    <link rel="shortcut icon" href="{{ asset('frontend/images/icons/logo-single-light.svg') }}" type="image/x-icon" />

    <!-- Open Graph / Facebook -->
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


    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Light.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Medium.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Regular.ttf') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/dubai-cufonfonts/Dubai-Bold.ttf') }}" />

    <style>
        .text-dangerr {
            color: #932e4b !important;
        }
        button[disabled] {
            pointer-events: none;
            cursor: not-allowed;
        }


        @keyframes rotateOutUpRight {
            0% {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, 0deg);
                opacity: 1;
                right: -45px;
            }
            100% {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
                right: -150px;
            }
        }

        @keyframes rotateInDownLeft {
            0% {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
                right: -150px;
            }
            100% {
                transform-origin: right bottom;
                transform: rotate3d(0, 0, 1, 0deg);
                opacity: 1;
                right: -45px;
            }
        }

        .hide-anim {
        animation: rotateOutUpRight 1s forwards;
        position: fixed;
        }

        .show-anim {
        animation: rotateInDownLeft 3s forwards;
        position: fixed;
        }
    </style>
</head>

<body>




    @yield('main')


    <img id="animatedImage" src="{{ asset('frontend/images/random/nft-sneak.png') }}" class="position-fixed d-none d-sm-block" style="right: -45px; bottom: 0px;" width="120px" alt="">



    <noscript>You need to enable JavaScript to run this app.</noscript>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.min.js') }}"></script>
    <script>
        let show = true;
        const image = document.getElementById('animatedImage');

        setInterval(() => {
          if (show) {
            image.classList.remove('show-anim');
            image.classList.add('hide-anim');
          } else {
            image.classList.remove('hide-anim');
            image.classList.add('show-anim');
          }
          show = !show;
        }, 8000); // Every 10 seconds
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" async></script> --}}
</body>

</html>
