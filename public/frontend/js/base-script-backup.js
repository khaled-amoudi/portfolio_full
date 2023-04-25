///////////////////////////////////////////////////////////////////
// Start ////////////////////////////////////// ScrollReveal effect
///////////////////////////////////////////////////////////////////
ScrollReveal().reveal(".skills .card, .teachers-section .card");
///////////////////////////////////////////////////////////////////
// End //////////////////////////////////////// ScrollReveal effect
///////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////
// Start ////////////////////// preloader [page occur in the first]
///////////////////////////////////////////////////////////////////
// window.onload = function () {
//   window.setTimeout(fadeout, 1000);
// }
// function fadeout() {
//   document.querySelector('.preloader').style.opacity = '0';
//   document.querySelector('.preloader').style.display = 'none';
// }

// $(".preloader img").on("animationend", function () {
//   // $(".preloader").css("display", "none");
//   $('.preloader').style.opacity = '0';
//   $('.preloader').style.display = 'none';
// });
///////////////////////////////////////////////////////////////////
// End //////////////////////// preloader [page occur in the first]
///////////////////////////////////////////////////////////////////

// Auto Initialized function
(function () {
  ///////////////////////////////////////////////////////////////////
  // Start ////////////////////// Initialized functionality of cursor
  ///////////////////////////////////////////////////////////////////
  var outerCursor = document.querySelector(".outerCursor");
  var innerCursor = document.querySelector(".innerCursor");

  document.addEventListener("mousemove", function (e) {
    outerCursor.style.cssText = innerCursor.style.cssText =
      "left:" + e.clientX + "px; top:" + e.clientY + "px;";
  });
  ///////////////////////////////////////////////////////////////////
  // End ////////////////////// Initialized functionality of cursor
  ///////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////////////////////////////
  // Start ///////////////////////// blobs effects in contact-us page
  ///////////////////////////////////////////////////////////////////
  var blob1 = document.querySelector(".blob1");
  var blob2 = document.querySelector(".blob2");
  var blob3 = document.querySelector(".blob3");
  var blob4 = document.querySelector(".blob4");
  document.addEventListener("mousemove", function (e) {
    blob1.style.cssText =
      "left:" + (e.clientX - 250) + "px; top:" + (e.clientY - 100) + "px;";
    blob2.style.cssText =
      "left:" + (e.clientX - 300) + "px; top:" + (e.clientY + 60) + "px;";
    blob3.style.cssText =
      "left:" + (e.clientX + 100) + "px; top:" + (e.clientY - 120) + "px;";
    blob4.style.cssText =
      "left:" + e.clientX + "px; top:" + (e.clientY + 100) + "px;";
  });
  ///////////////////////////////////////////////////////////////////
  // End /////////////////////////// blobs effects in contact-us page
  ///////////////////////////////////////////////////////////////////
})();

$(document).ready(function () {
  // initialized/show the custom curser
  $(".cursor").addClass("show-cursor");
  ///////////////////////////////////////////////////////////
  // Name curser on hover {Start} ###########################
  $("#name").hover(
    function () {
      $(".outerCursor").addClass("big-white-cursor");
      $(".cursor").css({ "mix-blend-mode": "difference" });
    },
    function () {
      $(".outerCursor").removeClass("big-white-cursor");
      $(".cursor").css({ "mix-blend-mode": "normal" });
    }
  );

  $("#name").on("select", function () {
    $(".outerCursor").css("big-white-cursor");
  });
  // Name curser on hover {End} #############################
  ///////////////////////////////////////////////////////////

  ///////////////////////////////////////////////////////////
  // Portfolio Card Hover Curser Effect {Start} #############
  $(".portfolio .content .front-card").hover(
    function () {
      $(".outerCursor").addClass("none-cursor");
      $(".innerCursor").removeClass("none-cursor");

      $(".innerCursor").addClass("preview-btn-cursor");
    },
    function () {
      $(".outerCursor").removeClass("none-cursor");
      $(".innerCursor").addClass("none-cursor");

      $(".innerCursor").removeClass("preview-btn-cursor");
    }
  );
  // Portfolio Card Hover Curser Effect {End} ###############
  ///////////////////////////////////////////////////////////

  ///////////////////////////////////////////////////////////
  // Pages notch Curser on Hover {Start} ####################
  $(
    "main .aboutPage, main .portfolioPage, main .contactPage, main .blogPage"
  ).hover(
    function () {
      $(".innerCursor").removeClass("none-cursor");
      $(".outerCursor").addClass("big-white-border-cursor");
    },
    function () {
      $(".innerCursor").addClass("none-cursor");
      $(".outerCursor").removeClass("big-white-border-cursor");
    }
  );
  // Pages notch Curser on Hover {End} ######################
  ///////////////////////////////////////////////////////////

  ///////////////////////////////////////////////////////////
  // marquee Cursor on hover {Start} ########################
  $("section.marquee").hover(
    function () {
      $(".outerCursor").addClass("med-cursor");
      $(".innerCursor").removeClass("none-cursor");
      // $(".cursor").css({"mix-blend-mode": "difference"});
    },
    function () {
      $(".outerCursor").removeClass("med-cursor");
      $(".innerCursor").addClass("none-cursor");
      // $(".cursor").css({"mix-blend-mode": "normal"});
    }
  );
  // marquee Cursor on hover {End} ##########################
  ///////////////////////////////////////////////////////////
  ///////////////////////////////////////////////////////////////////
  //
  //
  //
  //
  //
  //
  //
  //
  ///////////////////////////////////////////////////////////////////
  // Start ///////////////////////////////////////// Home Pages notch
  ///////////////////////////////////////////////////////////////////
  $(
    "main .aboutPage, main .portfolioPage, main .contactPage, main .blogPage"
  ).on("click", function () {
    $(this).css({ outlineStyle: "solid", outlineOffset: "0px" });
  });

  // Call open_pages_slide() after a delay of 1.2 second
  setTimeout(function () {
    open_pages_slide();
  }, 1200);

  // Wait for 3 seconds, then call close_pages_slide()
  setTimeout(function () {
    close_pages_slide();
  }, 3000);

  $("main .pages .homePage").on("mouseenter focus click", function () {
    open_pages_slide();
  });
  $("main .pages").on("mouseleave", function () {
    close_pages_slide();
  });

  function open_pages_slide() {
    $("main .aboutPage").addClass("slide-pages");
    $("main .portfolioPage").addClass("slide-pages");
    $("main .contactPage").addClass("slide-pages");
    $("main .blogPage").addClass("slide-pages");
  }
  function close_pages_slide() {
    $("main .aboutPage").removeClass("slide-pages");
    $("main .portfolioPage").removeClass("slide-pages");
    $("main .contactPage").removeClass("slide-pages");
    $("main .blogPage").removeClass("slide-pages");
  }
  ///////////////////////////////////////////////////////////////////
  // End /////////////////////////////////////////// Home Pages notch
  ///////////////////////////////////////////////////////////////////
  //
  //
  //
  //
  //
  //
  //
  //
  ///////////////////////////////////////////////////////////////////
  // Start //////////////////////// Portfolio Switcher [front - back]
  ///////////////////////////////////////////////////////////////////
  // هذا الشرط حطيناه عأساس انه لو بدنا نخلي الباك اند هو ال default
  // فبنروح نعطيه الكلاس هاد bg-gradient-cameleon
  if (
    $("#back").hasClass("bg-gradient-cameleon") ||
    $("#back2").hasClass("bg-gradient-cameleon")
  ) {
    $("#back-end-projects").fadeIn();
    $("#front-end-projects").fadeOut();
  } else {
    $("#front-end-projects").fadeIn();
    $("#back-end-projects").fadeOut();
  }

  $("#front, #front2").on("click", function () {
    $("#back, #back2").removeClass("bg-gradient-cameleon");
    $(this).addClass("bg-gradient-cameleon");
    $("#back-end-projects, #back-end-projects2").fadeOut();
    $("#front-end-projects, #front-end-projects2").fadeIn(1500);
  });
  $("#back, #back2").on("click", function () {
    $("#front, #front2").removeClass("bg-gradient-cameleon");
    $(this).addClass("bg-gradient-cameleon");
    $("#front-end-projects, #front-end-projects2").fadeOut();
    $("#back-end-projects, #back-end-projects2").fadeIn(1500);
  });
  ///////////////////////////////////////////////////////////////////
  // End ////////////////////////// Portfolio Switcher [front - back]
  ///////////////////////////////////////////////////////////////////
  //
  //
  //
  //
  //
  //
  //
  //
  ///////////////////////////////////////////////////////////////////
  // Start ///////////// Routing Pages [home, about, portfolio, contat]
  /////////////// some ather functionality of redirect, enable, etc..
  ///////////////////////////////////////////////////////////////////
  // redirect tp pages {Start}
  $(".about-body, .portfolio-body, .contact-body").hide();
  $(".routeAboutPage, .routePortfolioPage, .routeContactPage").on(
    "click",
    function () {
      if ($(this).hasClass("routeAboutPage")) {
        openAboutPage();
      } else if ($(this).hasClass("routePortfolioPage")) {
        openPortfolioPage();
      } else if ($(this).hasClass("routeContactPage")) {
        openContactPage();
      } else {
        $(".main-body").children().fadeIn(600);
        window.location = "";
      }
    }
  );
  // redirect tp pages {End}

  function openHomePage() {
    $(".main-body").children().fadeIn(600);
    // activate the icon in the navbar
    activate_Navbar_Icon(".routeHomePage");
  }
  // open About page (1-fadeout home page, 2-open about page)
  function openAboutPage() {
    window.location.hash = "about";
    // $(".main-body").children().fadeOut();
    enableSection(".about-body");
    // activate the icon in the navbar
    activate_Navbar_Icon(".routeAboutPage");
  }
  // open Portfolio page (1-fadeout home page, 2-open portfolio page)
  function openPortfolioPage() {
    window.location.hash = "portfolio";
    // $(".main-body").children().fadeOut();
    enableSection(".portfolio-body");
    // activate the icon in the navbar
    activate_Navbar_Icon(".routePortfolioPage");
  }
  // open Contact page (1-fadeout home page, 2-open contact page)
  function openContactPage() {
    window.location.hash = "contact";
    // $(".main-body").children().fadeOut();
    enableSection(".contact-body");
    // activate the icon in the navbar
    activate_Navbar_Icon(".routeContactPage");
  }

  // add class active on the current fragment button in navbar in both mobile and web navs
  function activate_Navbar_Icon(route) {
    $(".side_bar_nav_icon").removeClass("active");
    $(route + " .side_bar_nav_icon").addClass("active");
  }

  // enable section and scroll to top page, and hide other sections (except curser, side_bar)
  function enableSection(section_id) {
    $("body").children().not(".cursor, .side_bar").fadeOut(600);
    $(section_id).delay(600).fadeIn(600);
    $(window).scrollTop(0);
  }

  ///////////////////////////////////////////////////////////////////
  // some points of checking the current page and redirects when some conditions occur

  // check the current fragment(hash) after relod the page to redirect to its page,
  // without this code, e.g. if the fragment {#about} exist and you refresh the page,
  // then it will keep the fragment in the url, but it will redirect to home page.
  $(window).on("load", function () {
    redirectToCurrentHashPage();
  });
  // reload page when redirect back or redirect forward by browser
  $(window).on("popstate pushstate", function (event) {
    location.reload();
  });
  // check if any change happend on the hash code in url, to redirect.
  // $(window).bind('hashchange', function() {
  //   redirectToCurrentHashPage();
  // });

  // this method check the current hash and redirect to its page,
  // if hash is not available, then it rederect the home page
  function redirectToCurrentHashPage() {
    if (/about/.test(window.location.href)) {
      openAboutPage();
    } else if (/portfolio/.test(window.location.href)) {
      openPortfolioPage();
    } else if (/contact/.test(window.location.href)) {
      openContactPage();
    } else {
      openHomePage();
    }
  }
  ///////////////////////////////////////////////////////////////////
  // End ///////////// Routing Pages [home, about, portfolio, contat]
  /////////////// some ather functionality of redirect, enable, etc..
  ///////////////////////////////////////////////////////////////////
  //
  //
  //
  //
  //
  //
  //
  //
  /////////////////////////////////////////////////////////////////////////
  // Start ///////////// Show & hide side_bar in all pages except home page
  /// in home page the side_bar will appear if reach the .portfolio section
  /////////////////////////////////////////////////////////////////////////
  if (window.location.hash) {
    $(".side_bar").css({ left: "1rem", transitionDuration: ".4s" });
  } else {
    var element_position = $(".main-body .portfolio").offset().top;
    var screen_height = $(window).height();
    var activation_offset = 0.3; //determines how far up the the page the element needs to be before triggering the function
    var activation_point = element_position - screen_height * activation_offset;
    var max_scroll_height = $("body").height() - screen_height - 5; //-5 for a little bit of buffer
    $(window).on("scroll", function () {
      var y_scroll_pos = window.pageYOffset;

      var element_in_view = y_scroll_pos > activation_point;
      var has_reached_bottom_of_page =
        max_scroll_height <= y_scroll_pos && !element_in_view;

      if (element_in_view || has_reached_bottom_of_page) {
        $(".side_bar").css({ left: "1rem", transitionDuration: ".4s" });
      } else {
        $(".side_bar").css({ left: "-70px", transitionDuration: ".2s" });
      }
    });
  }
  /////////////////////////////////////////////////////////////////////////
  // End ///////////// Show & hide side_bar in all pages except home page
  /// in home page the side_bar will appear if reach the .portfolio section
  /////////////////////////////////////////////////////////////////////////
  //
  //
  //
  //
  //
  //
  //
  //
  /////////////////////////////////////////////////////////////////////////
  // Start //////////////////////////// Stop inspect by f12 and right click
  /////////////////////////////////////////////////////////////////////////
  // $(document).bind("contextmenu",function(e) {
  //   e.preventDefault();
  // });
  // $(document).keydown(function(e){
  //   if(e.which === 123){
  //     return false;
  // }
  // });
  /////////////////////////////////////////////////////////////////////////
  // End //////////////////////////// Stop inspect by f12 and right click
  /////////////////////////////////////////////////////////////////////////
  //
  //
  //
  //
  //
  //
  //
  //
});

/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////// JavaScript [pure] ///////////////////////////
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////
// Start ///////////////////////////////////////////////// CV card effect
/////////////////////////////////////////////////////////////////////////
// في حالة كان عندي مجموعة كاردز الهم نفس الايفيكت
// const cards = document.querySelectorAll(".cv .cv-card");
// for(let i=0; i<cards.length; i++){
// 	cards[i].addEventListener('mousemove', rotate);
// 	cards[i].addEventListener('mouseleave', clearRotate);
// }
const card = document.querySelector(".cv .cv-card");
card.addEventListener("mousemove", rotate);
card.addEventListener("mouseleave", clearRotate);

function rotate(e) {
  const cardItem = this.querySelector(".cv .cv-card-item");
  const force = 55;
  const offsetY = -(e.offsetY - cardItem.offsetHeight / 2) / force;
  const offsetX = (e.offsetX - cardItem.offsetWidth / 2) / force;
  cardItem.style.transform =
    "rotateX(" + offsetY + "deg) rotateY(" + offsetX + "deg)";
}

function clearRotate(e) {
  if (e.target.classList.contains("cv-card")) {
    const cardItem = this.querySelector(".cv .cv-card-item");
    cardItem.style.transform = "rotateX(0) rotateY(0)";
  }
}
/////////////////////////////////////////////////////////////////////////
// End /////////////////////////////////////////////////// CV card effect
/////////////////////////////////////////////////////////////////////////
//
//
//
//
//
//
//
//

// change the text when selecting
// function getSelectedText() {
//   if (window.getSelection) {
//       return window.getSelection().toString();
//   } else if (document.selection) {
//       return document.selection.createRange().text;
//   }
// }
// var b = document.getElementsByTagName('h2')[0],
//   o = document.getElementById('output');
// b.onmouseup = function(e){
//   var selText = getSelectedText(),
//       targetElem = e.target.tagName.toLowerCase();
//   if (selText && targetElem == 'h2') {
//     if(selText.includes('Khaled Amoudi')){
//       b.textContent = 'Why Selecting Me !!';
//       //here some css changes with transition also ..
//     }
//       // o.textContent = 'You selected the text: "' + selText + '" from a ' + targetElem + ' element.';
//   }
// };
