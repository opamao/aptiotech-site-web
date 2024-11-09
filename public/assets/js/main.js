    "use strict";


    var windowOn = $(window);
  
    // PreLoader Js
    windowOn.on('load', function () {
      $("#loading").fadeOut(500);
    });

    /*--
        Header Sticky
    -----------------------------------*/

    window.onscroll = function () {
        const left = document.getElementById("header");

        if (left.scrollTop > 50 || self.pageYOffset > 50) {
            left.classList.add("sticky")
        } else {
            left.classList.remove("sticky");
        }
    }    


  /*--
        Mobile Menu
  -----------------------------------*/
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991",
		meanExpand: ['<i class="fas fa-plus"></i>'],
	});

   /*--
        Sidebar Js
  -----------------------------------*/
	$(".sidebar-toggle-btn").on("click", function () {
		$(".sidebar__area").addClass("sidebar-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".sidebar__close-btn").on("click", function () {
		$(".sidebar__area").removeClass("sidebar-opened");
		$(".body-overlay").removeClass("opened");
	});



	/*--
        Body overlay Js
  -----------------------------------*/
	$(".body-overlay").on("click", function () {
		$(".sidebar__area").removeClass("sidebar-opened");
		$(".body-overlay").removeClass("opened");
	});


    /*--
        Search Js
    -----------------------------------*/
	var $searchWrap = $('.search-wrap');
	var $navSearch = $('.search-btn');
	var $searchClose = $('#search-close');

	$('.search-btn').on('click', function (e) {
		e.preventDefault();
		$searchWrap.animate({ opacity: 'toggle' }, 500);
		$navSearch.add($searchClose).addClass("open");
	});

	$('.search-close').on('click', function (e) {
		e.preventDefault();
		$searchWrap.animate({ opacity: 'toggle' }, 500);
		$navSearch.add($searchClose).removeClass("open");
	});

	function closeSearch() {
		$searchWrap.fadeOut(200);
		$navSearch.add($searchClose).removeClass("open");
	}

	$(document.body).on('click', function (e) {
		closeSearch();
	});

	$(".search-btn, .main-search-input").on('click', function (e) {
		e.stopPropagation();
	});



  /*--    
    Counter Up
  -----------------------------------*/  

    $('.counter').counterUp({
      delay: 10,
      time: 1500,
  });

  /*--    
    Progress Bar
  -----------------------------------*/  

  if($('.progress-line').length) {
    $('.progress-line').appear(function(){
        var el = $(this);
        var percent = el.data('width');
        $(el).css('width', percent+'%');
    }, {accY: 0});
  }

   /*--    
       Marquee Active  
    -----------------------------------*/
    if ($(".marquee_mode").length) {
      $('.marquee_mode').marquee({
          speed: 100,
          gap: 0,
          delayBeforeStart: 0,
          direction: 'left',
          duplicated: true,
          pauseOnHover: true,
          startVisible:true,
      });
  }

  /*--    
        Brand Active
    -----------------------------------*/
    var swiper = new Swiper(".brand-active .swiper-container", {
      slidesPerView: 5,
      spaceBetween: 30,
      loop: true,
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
        },
        992: {
          slidesPerView: 5,
        },
      },
  });

  
  
    /*--
      Testimonial Active
    -----------------------------------*/
    var swiper = new Swiper('.testimonial-active', {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      pagination: {
        el: ".testimonial-active .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 2,
          centeredSlides: false,
        },
        1200: {
          slidesPerView: 3,
        },
      }
  });

  /*--
    Testimonial-2 Active
  -----------------------------------*/
  var swiper = new Swiper('.testimonial-2-active', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,  
    pagination: {
      el: ".testimonial-2-active .swiper-pagination",
      clickable: true,
    },      
  });


  /*--
    magnificPopup video view 
  -----------------------------------*/	
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});

   /*--
        AOS
    -----------------------------------*/   
    AOS.init({
      duration: 1200,
      once: true,
  });
