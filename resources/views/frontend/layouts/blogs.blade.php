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
      rel="stylesheet"
    />
    <link href="https://fonts.cdnfonts.com/css/dubai" rel="stylesheet">

    <!-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63cf265338862e00198c0bfd&product=sticky-share-buttons&source=platform" async="async"></script> -->
  </head>
<body class="container-xxl px-0">




    @yield('main')





{{-- <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
    integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script> --}}
  <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/base-blog-script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63cf2966e597149d"></script>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63cf280fd7982a0019bfb454&product=inline-reaction-buttons&source=platform" async="async"></script>
</body>

</html>
