$( "#menu, .nav-overlay" ).click(function() {
  $(".dropdown").toggleClass( "drawn");
  $("#menu").toggleClass( "opened");

  if($(".dropdown").hasClass( "drawn")) {
    $('body').css('overflow', 'hidden');
    $('.nav-overlay').addClass('active');
  } else {
    $('body').css('overflow', 'visible');
    $('.nav-overlay').removeClass('active');
  }
});

/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  console.log(currentScrollPos);
  if(currentScrollPos > 100 && !$(".dropdown").hasClass( "drawn")) {
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("nav").style.top = "0";
    } else {
      document.getElementById("nav").style.top = "-90px";
      // $(".dropdown").removeClass( "drawn");
      // $("#menu").removeClass( "opened");
    }
  } else {
    document.getElementById("nav").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
  }


	$("input#accept_terms").click(function() {
    $(".form-btn").toggleClass("disabled");
});

// SLIDESHOWS
  
	$('.slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  fade: true,
  autoplaySpeed: 2500,
  arrows: false,
  pauseOnHover: false
});

  $('.slideshow-testimonials').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: false,
  fade: false,
  adaptiveHeight: false,
  autoplaySpeed: 5500,
  arrows: true,
  pauseOnHover: false
});

  $('.slideshow-profile-testimonials').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  fade: true,
  adaptiveHeight: true,
  autoplaySpeed: 5500,
  arrows: false,
  pauseOnHover: false
});

  $('.slideshow-hero').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  swipe: false,
  fade: true,
  autoplaySpeed: 2500,
  speed: 1000,
  arrows: false,
  pauseOnHover: false
});

  $('.ticker').slick({
  speed: 20000,
  autoplay: true,
  autoplaySpeed: 0,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 1,
  variableWidth: true,
  arrows: false
});

  $('.fast-ticker').slick({
  speed: 20000,
  autoplay: true,
  autoplaySpeed: 0,
  cssEase: 'linear',
  slidesToShow: 1,
  slidesToScroll: 10,
  variableWidth: true,
  arrows: false
});
  
  $('.room-slider').slick({
  autoplay: true,
  autoplaySpeed: 3500,
  speed: 1000,
  swipeToSlide: true,
  slidesToScroll: 1,
  centerMode: false,
  variableWidth: true,
  arrows: false
});


//  ACCORDIONS
var accordions = [].map.call(document.querySelectorAll(".accordion"), function (el) {return el;});
//  update --max-height style on load and resize
["load", "resize"].map(function (event) {
  return window.addEventListener(event, function () {
    accordions.map(function (el) {
      return el.style.setProperty("--max-height", el.scrollHeight + "px");
    });
    //  if browser does not support CSS Variables
    //  accordions.map(el => el.style.maxHeight = `${el.scrollHeight}px`);
  });
});
[].slice.call(document.querySelectorAll(".accordion")).forEach(function (element) {
  element.addEventListener("click", function (e) {
    element.classList.toggle("checked");
  });
});

$(document).ready(function(){
  $(".call-button").click(function(){
    $(".call-popup").slideToggle("400");
  });


// FORMS
  // Submit call form.
  $("form#callform").on("submit", function(e) {
    e.preventDefault();
    $form = $(this);

    /*let data = {
      formid: "callform",
      slot: $("#slots", $form).val(),
      csrf_token: $("[name='csrf_token']", $form).val(),
      website: $("[name='website']", $form).val(),
      phonenumber: $("#phonenumber", $form).val()
    };*/

    $.ajax({
      method: "POST",
      url: "/callform",
      data: $form.serialize()
    }).done(function( msg ) {
      $form.html("<h6 class='ta-c'>Stærkt! Tusind tak. Du vil blive ringet op i løbet af det valgte tidsrum. Vi tales ved!</h6>");
    });
  });

  

  $(".book-button, .close-btn, .book-form-overlay").on("click", function(e) {
    e.preventDefault();
    var $bookParent = $("article#book-form");
    $bookParent.toggleClass('slideIn');

    if($bookParent.hasClass( "slideIn")) {
      $('body').css('overflow', 'hidden');
      $('.book-form-overlay').addClass('active');
    } else {
      $('body').css('overflow', 'visible');
      $('.book-form-overlay').removeClass('active');
    }
  })

  // $(".book-button").on("click", function(e) {
  //   e.preventDefault();
  //   var $bookParent = $("article#book-form");
  //   $bookParent.addClass('slideIn');

  //   $(".close-btn").on("click", function(e) {
  //     if ($bookParent.hasClass('slideIn')) {
  //       $bookParent.removeClass('slideIn');
  //     }
  //   });
  // });

  // Submit that other form.
  $("#bookform").on("submit", function(e) {
    e.preventDefault();

    $terms = $("input#accept_terms");
    if (!$terms.is(":checked")) {
      return false;
    }

    $form = $(this);
    $parent = $form.parents("#book-form:first");

    /*let data = {
      formid: "bookform",
      csrf_token:  $("[name='csrf_token']", $form).val(),
      website: $("[name='website']", $form).val(),
      bookname: $("#bookname", $form).val(),
      bookage: $("#bookage", $form).val(),
      bookpostalcode: $("#bookpostalcode", $form).val(),
      bookphonenumber:  $("#bookphonenumber", $form).val(),
      bookemail:  $("#bookemail", $form).val(),
      bookmessage:  $("#bookmessage", $form).val(),
      bookterms: $("#accept_terms", $form).is(":checked") ? 'Ja' : 'Nej',
      accept_marketing: $("#accept_marketing", $form).is(":checked") ? 'Ja' : 'Nej'
    }; */

    $.ajax({
      method: "POST",
      url: "/bookform",
      data: $form.serialize(),
    }).done(function( msg ) {
       // $parent.removeClass('slideIn');
      $form.html("<div class='close-btn'><svg class='tab-x' xmlns='http://www.w3.org/2000/svg' width='20' height='20'><g><rect class='bar1' x='9' y='0' width='2' height='20' fill='#2E233D'/><rect class='bar2' x='0' y='9' width='20' height='2' fill='#2E233D'/></g></svg></div><h6 class='subheading va-c lh-15 h-100 m-body'>Tusind tak for din henvendelse! Vi glæder os til at læse din besked og vender tilbage til dig inden for tre&nbsp;dage.</h6>");
      $(".close-btn").on("click", function(e) {
        e.preventDefault();
        var $bookParent = $("article#book-form");
        $bookParent.toggleClass('slideIn');
    
        if($bookParent.hasClass( "slideIn")) {
          $('body').css('overflow', 'hidden');
          $('.book-form-overlay').addClass('active');
        } else {
          $('body').css('overflow', 'visible');
          $('.book-form-overlay').removeClass('active');
        }
      })
    });
  });

  $("#close_success1").click(function(){
    $(".success_msg_wrapper2").fadeOut("400");
  $(".modal-overlay").hide();
  });
});

//  SCROLLREVEALS

ScrollReveal().reveal('.reveal', { delay: 250, origin: 'bottom', distance: '50px', duration: 500 });
ScrollReveal().reveal('.reveal-2', { delay: 450, origin: 'bottom', distance: '50px', duration: 500 });
ScrollReveal().reveal('.reveal-fade', { delay: 250, duration: 500 });
