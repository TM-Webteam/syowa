$(document).ready(function() {
  //---------------------------------
  // SP時横スクロール UI
  //---------------------------------

  new ScrollHint('.scroll', {
    i18n: {
      scrollable: '横スクロールできます'
    }
  });

});


//--------------------------------------
//　header　演出
//--------------------------------------

$(function(){
  var pos = 0;
  var header = $('header');
  
  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos || $(this).scrollTop() < 400){
      header.removeClass('hide');
    }else{
      header.addClass('hide');
    }
    pos = $(this).scrollTop();
  });
});


//--------------------------------------
//　アコーディオンメニュー
//--------------------------------------

(function ($) {
  $(function () {
    $('#nav-toggle').on('click', function () {
      $('header').toggleClass('open');
      $('#gloval-nav').slideToggle();
    });
  });
})(jQuery);


//--------------------------------------
//　wp-slick
//--------------------------------------

$(document).ready(function() {
  $('#wp-slick').slick({
    arrows: true,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});


//--------------------------------------
//　introduction
//--------------------------------------

$(document).ready(function() {
  $('#introduction').slick({
    arrows: true,
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 700, // 700px以下のサイズに適用
        settings: {
        slidesToShow: 1,
        },
      },
    ],
  });
});


//--------------------------------------
//　簡単物件探し　プルダウン
//--------------------------------------

$(document).ready(function(){
   $(".consult__box--ttl").on("click", function() {
      $(this).toggleClass('open');
   $(this).next().slideToggle(400);
  });
});
