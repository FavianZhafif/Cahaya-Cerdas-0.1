var delayInShortMilliseconds = 350;
var delayInMilliseconds = 500;
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

$(document).ready(function() {
    $(SmallImg[0]).click(function() {
        ProductImg.src = SmallImg[0].src
    });
    $(SmallImg[1]).click(function() {
        ProductImg.src = SmallImg[1].src
    });
    $(SmallImg[2]).click(function() {
        ProductImg.src = SmallImg[2].src
    });
    $(SmallImg[3]).click(function() {
        ProductImg.src = SmallImg[3].src
    });
    $('.product-inf a').click(function() {
    
        $('.product-inf li').removeClass('active');
        $(this).parent().addClass('active');
    
        let currentTab = $(this).attr('href');
        $('.tabs-content div').hide();
        $(currentTab).show();
    
        return false;
    });
});

$('.navbar-button').click(function(){
  
  if($("#nav-icon3").hasClass('open')) {
    $('#nav-icon3').toggleClass('open');
    $('.menu-bc').css('animation', 'menu2 .35s ease-in-out forwards');
    $('.menu-items').css('animation', 'menu-items2 .25s ease-in-out forwards');
    setTimeout(function() {
      $('.menu').css('display', 'none');
    }, delayInShortMilliseconds);
  } else {
    $('#nav-icon3').toggleClass('open');
    $('.menu-bc').css('animation', 'menu .35s ease-in-out forwards');
    $('.menu').css('display', 'block');
    $('.menu-items').css('animation', 'menu-items .25s .2s ease-in-out forwards');
  }
  
});

$(document).ready(function() {
$(".button-down").click(function() {
     $('html, body').animate({
         scrollTop: $(".krd").offset().top + (0)
     }, 750);
 });
});

$('.play-but').click(function(){
  
  $('.video-modal-wrapper').css("display", "flex");
  $(".video-modal-wrapper").css("animation", "fadein .3s ease-in-out forwards");
  $(".video-modal").css("animation", "fade .3s ease-in-out forwards");
  
  setTimeout(function() {
      $(".video-modal-wrapper").css("", "");
    }, delayInMilliseconds);
});

$('.video-modal-wrapper').click(function(){
  $('.video-modal-wrapper').css("animation", "fadeout .3s ease-in-out forwards");
  $('.video-modal').css("animation", "fade2 .3s ease-in-out forwards");
  
  setTimeout(function() {
      $('.video-modal-wrapper').css("display", "none");
    }, delayInMilliseconds);
});