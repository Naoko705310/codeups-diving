
jQuery(function ($) {
  // ハンバーガーメニュー（FadeInすなわちdisplay:blockにする）
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').fadeOut();
      $(this).removeClass('is-open');
      // メニューが閉じたときにスクロールを有効にする
      $('body').css('overflow', 'auto');
      // メニューが閉じたときにヘッダーの色を元に戻す
      $('.js-header').css('background-color', '');
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
      // メニューが開いたときにスクロールを無効にする
      $('body').css('overflow', 'hidden');

      // メニューが開いたときにヘッダーの色を設定
      $('.js-header').css('background-color', '#408F95'); // 背景色を設定
    }
  }); // ハンバーガー：閉じタグ

  // ナビのリンクがクリックされたときの処理
  $('.global-nav__link, .global-nav__heading').on('click', function () {
    // SPナビを閉じる
    $('.js-drawer-menu').fadeOut();
    $('.js-hamburger').removeClass('is-open');
    $('body').css('overflow', 'auto');
    // ナビのリンクからhref属性を取得し、該当のセクションへスクロール
    var targetSection = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(targetSection).offset().top
    }, 1000); // スクロールのアニメーション時間を調整
  });

  // ヘッダーの色を変える（FadeInすなわちdisplay:blockにする）
  // $('.js-header').on('click', function () {
  //   if ($('.js-header').hasClass('is-open')) {
  //     $('.js-header').removeClass('is-open'); // .is-open クラスを削除
  //     $('.js-header').css('background-color', ''); // 背景色をクリア（元に戻す）
  //   } else {
  //     $('.js-header').addClass('is-open'); // .is-open クラスを追加
  //     $('.js-header').css('background-color', '#408F95'); // 背景色を設定
  //   }
  // });

  // スワイパー(FV)
  let fvSwiper = new Swiper('.js-fv-swiper', {
    loop: true, // ループ有効
    autoplay: {
      delay: 3000, // 自動再生の遅延時間（ミリ秒）
    },
    slidesPerView: 1, // 1度に1枚のスライドを表示
    allowTouchMove: false, // ユーザーのスワイプ操作を無効にする
  });
  // FVスワイパーここまで



  // スワイパー(Campaign)
  let campaignSwiper = new Swiper('.js-campaign-swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
    },
    allowTouchMove: true,
    allowSlideNext: true,
    allowSlidePrev: true,
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    },
  });


}); //jQuery 閉じタグ




