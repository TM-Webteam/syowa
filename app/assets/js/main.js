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


//--------------------------------------
//　カウントアップ　js
//--------------------------------------

$('#hexagon').on('inview', function(event, isInView) {
	if (isInView) {
		//要素が見えたときに実行する処理
		$("#hexagon .count-up").each(function(){
			$(this).prop('Counter',0).animate({//0からカウントアップ
		        Counter: $(this).text()
		    }, {
				// スピードやアニメーションの設定
		        duration: 1500,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
		        easing: 'swing',//動きの種類。他にもlinearなど設定可能
		        step: function (now) {
		            $(this).text(Math.ceil(now));
		        }
		    });
		});
	}
});