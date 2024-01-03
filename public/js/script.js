// 押したらふわーんと移動する
$(function () {
  $('a[href^="#"]').click(function() {
      var speed = 400;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
  });
});

// トップへ戻るボタン
$(function () {
  const btn = $(".c-btn");
  btn.hide(); // 最初はボタンを非表示にする
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1000) { // 100pxスクロールしたら表示
      btn.fadeIn(); // 100px以上スクロールしたらボタンをフェードイン
    } else {
      btn.fadeOut(); // 100px以下になったらボタンをフェードアウト
    }
  });
  btn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0, // 上から0pxの位置に戻る
      },
      500 // 500ミリ秒かけて戻る
    );
    return false;
  });

  // スライダー
  $(".slider_work").slick({
    // dots: true,
    autoplay: true,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });


  //スライダー2
  $(".slider").slick({
    // dots: true,
    autoplay: true,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
  });
});

//ハンバーガーメニューのドロワーが開きます
jQuery("#js-drawer-icon").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-drawer-icon").toggleClass("is-checked");
  jQuery("#js-drawer-content").toggleClass("is-checked");
});
