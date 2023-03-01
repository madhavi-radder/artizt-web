(function($) {
  "use strict";
  
  AOS.init({
    disable: function() {
      var maxWidth = 1200;
      return window.innerWidth < maxWidth;
    }
  });

  $('.counter').countUp({
    delay: 50,
    time: 5000
});

  
  // Preloader
  /*$(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

  $('#dateTime').datetimepicker({
    uiLibrary: 'bootstrap4',
    modal: true,
    footer: true,
});

    $("#dateTime").focus(function(){
      $(".date-time").addClass("onfocus");
   });*/

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll >= 100) {
        //console.log('a');
        $("header").addClass("fixed-top");
        //$("header").removeClass("pad-bot-15");
        $("body").addClass("scroll");
    } else {
        //console.log('a');
        $("header").removeClass("fixed-top");
        $("body").removeClass("scroll");
        //$("header").addClass("pad-bot-15");
    }
});
  
  // Back to top button
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll >= 300) {
        //console.log('a');
        $(".back-to-top").addClass("scrollfixed");
    } else {
        //console.log('a');
        $(".back-to-top").removeClass("scrollfixed");
    }
});



/*$(window).scroll(function() {    
  $("#infrastructure").removeClass("bottom-fixed");
  var scroll = $(window).scrollTop();
   //console.log(scroll);
  if (scroll >= 350) {
      //console.log('a');
      $("#infrastructure").addClass("fixed");
  } else {
      //console.log('a');
      $("#infrastructure").removeClass("fixed");
  }
  if($(window).scrollTop() + $(window).height() > ($(document).height() - 500) ) {
      //you are at bottom
      $("#infrastructure").addClass("bottom-fixed");
  }
});*/


$('.collapse').on('shown.bs.collapse', function () {
  $(this).prev().addClass('active-acc');
});

$('.collapse').on('hidden.bs.collapse', function () {
  $(this).prev().removeClass('active-acc');
});

$('.collapse').on('shown.bs.collapse', function(e) {
var $card = $(this).closest('.card');
$('html,body').animate({
scrollTop: $card.offset().top -100
}, 500);
});


$("input[name='accordion']").click(function () {
  $("html, body").animate({
    scrollTop: $("#" + $(this).attr("id")).offset().top +400
  }, 1000)
})
  
$(document).ready(function() {
    $('.carousel').carousel({
      interval: 5000,
    }); 

    $('form').parsley().options.equaltoMessage = "Confirm password should be same as password";


});





/*$('.toptests-slider').slick({
  slidesToScroll: 1,
  infinite:true,
  slidesToShow: 4,
  autoplay: true,
  arrows: true,
  dots: false,
  autoplaySpeed: 3000,
  responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow:3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 760,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
  ]
});

$('.health-packages').slick({
  slidesToScroll: 1,
  infinite:true,
  slidesToShow: 4,
  autoplay: true,
  arrows: true,
  dots: false,
  autoplaySpeed: 3000,
  responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow:3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 760,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
  ]
});*/


 /*$('.carousel').carousel();

 $('.testimonial-scroll').slick({
  slidesToScroll: 1,
  infinite:true,
  slidesToShow: 1,
  autoplay: true,
  arrows: true,
  dots: false,
  autoplaySpeed: 2000,
});*/

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();		 
        if (scroll >= 900) {
          //console.log('a');
          $("#fxng").addClass("fixed");
        } else {
          //console.log('a');
          $("#fxng").removeClass("fixed");
      }
    });

    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();		 
        if (scroll >= 400) {
          //console.log('a');
          $("#cont").addClass("fixed");
        } else {
          //console.log('a');
          $("#cont").removeClass("fixed");
      }
    });

      /*$("#location").change(function(){
          $(this).find("option:selected").each(function(){
              var optionValue = $(this).attr("value");
              if(optionValue){
                  $(".address-box").not("." + optionValue).hide();
                  $("." + optionValue).show();
              } else{
                  $(".address-box").show();
              }
          });
      }).change();*/

    jQuery(function($) {
      if ($(window).width() > 991) {
        $('.navbar .dropdown').hover(function() {
          $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
    
        }, function() {
          $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();    
        });    
        $('.navbar .dropdown > a').click(function() {
          location.href = this.href;
        });    
      }
    });

})(jQuery);

$(document).ready(function(){
  $("#findtalent").hover(function(){

    /*$("#banner_title").fadeOut(100,function(){
             $(this).html("Connecting <br /><span>Artizt Globally</span>").fadeIn();
    }); 
    $("#banner_txt").fadeOut(100,function(){
             $(this).html("Connecting <br /><span>Artizt Globally</span>").fadeIn();
    });*/ 
	$(".main-text").css('opacity','0');
    $("#banner_title").html("Artizt find Projects <br /><span>Project's find Artizt</span>");
    $("#banner_txt").html('Search & Find - Art,  Artizt, Projects, Business, Events & Opportunities');
    $("#findtalent").addClass("btn-select");
    $("#project").removeClass("btn-select");
    $("#events").removeClass("btn-select");
	$("#networking").removeClass("btn-select");
	$("#fnc").removeClass("btn-select");
	$("#artiztore").removeClass("btn-select");
  });

  $("#project").hover(function(){
	  $(".main-text").css('opacity','0');
    $("#banner_title").html("Create & Connect<br /> <span>with Projects</span>"); 
    $("#banner_txt").html("Art, Craft, Creations, Content, Movie, Music, Album, Product, Shows, Events…");
    $("#project").addClass("btn-select");
    $("#events").removeClass("btn-select");
    $("#findtalent").removeClass("btn-select");
	$("#networking").removeClass("btn-select");
	$("#fnc").removeClass("btn-select");
	$("#artiztore").removeClass("btn-select");
  });

  $("#events").hover(function(){
	  $(".main-text").css('opacity','0');
    $("#banner_title").html("Stage");
    $("#banner_txt").html("Festivals, Programs, Exhibitions, Meetings, Networking, Award Functions, Celebrations, Project Launches, Success Parties, Workshops, Trainings, Pitchers Ztage, Mentors Meet, Investors Meet");
    $("#events").addClass("btn-select");
	$("#networking").removeClass("btn-select");
    $("#project").removeClass("btn-select");
    $("#findtalent").removeClass("btn-select");
	$("#fnc").removeClass("btn-select");
	$("#artiztore").removeClass("btn-select");
  });
  
  $("#networking").hover(function(){
	  $(".main-text").css('opacity','0');
    $("#banner_title").html("Explore<br /> <span> Opportunities</span>");
    $("#banner_txt").html("Connecting Artizts Globally Online & Offline");
    $("#networking").addClass("btn-select");
	$("#events").removeClass("btn-select");
    $("#project").removeClass("btn-select");
    $("#findtalent").removeClass("btn-select");
	$("#fnc").removeClass("btn-select");
	$("#artiztore").removeClass("btn-select");
  });
  
  $("#fnc").hover(function(){
	  $(".main-text").css('opacity','0');
    $("#banner_title").html("Offers & <br /> <span>Opportunities</span>");
    $("#banner_txt").html("Freelancing & Consulting Services Artizt Work - Project Based / Time Based Creative Collaboration, Artizt As Career");
	$("#fnc").addClass("btn-select");
    $("#networking").removeClass("btn-select");
	$("#events").removeClass("btn-select");
    $("#project").removeClass("btn-select");
    $("#findtalent").removeClass("btn-select");
	$("#artiztore").removeClass("btn-select");
  });
  
  $("#artiztore").hover(function(){
	  $(".main-text").css('opacity','0');
    $("#banner_title").html("Market & <br /> <span>Monetize</span>");
    $("#banner_txt").html("Artizt Gallery - Exhibit<br /><br />Online Store:<br />Artizt Creations, Arts, Crafts, Designs, Products , Artizt Images, Brand and Commodity, Instruments, Equipment's…");
	$("#artiztore").addClass("btn-select");
	$("#fnc").removeClass("btn-select");
    $("#networking").removeClass("btn-select");
	$("#events").removeClass("btn-select");
    $("#project").removeClass("btn-select");
    $("#findtalent").removeClass("btn-select");
  });

  $('.input100').each(function(){
      $(this).on('blur', function(){
          if($(this).val().trim() != "") {
              $(this).addClass('has-val');
          }
          else {
              $(this).removeClass('has-val');
          }
      })    
  })

  $(".toggle-password").click(function() {
      $(this).toggleClass("far fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") { 
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
  });

  

  $("#business").click(function() {
    //alert("test");
     $("#applybtn").html("Apply as a Business Account");
     $("#applybtn").show(10);
  });
  $("#artizt").click(function() {
     $("#applybtn").html("Apply as a Artizt");
     $("#applybtn").show(10);
  });
  $("#buddingstar").click(function() {
     $("#applybtn").html("Apply as a Budding Star");
     $("#applybtn").show(10);
  });
  $("#follower").click(function() {
     $("#applybtn").html("Apply as a Fans & Followers");
     $("#applybtn").show(10);
  });
  $("#artizt_parents").click(function() {
     $("#applybtn").html("Apply as a Artizt Parents");
     $("#applybtn").show(10);
  });
  
  
});

