
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
      $('.js-header').css('background-color', '$green'); // 背景色を設定
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
  $('.js-header').on('click', function () {
    if ($('.js-header').hasClass('is-open')) {
      $('.js-header').removeClass('is-open'); // .is-open クラスを削除
      $('.js-header').css('background-color', ''); // 背景色をクリア（元に戻す）
    } else {
      $('.js-header').addClass('is-open'); // .is-open クラスを追加
      $('.js-header').css('background-color', '$green'); // 背景色を設定
    }
  });

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
  let CampaignSwiper = new Swiper('.js-campaign-swiper', {
    loop: true, // ループ有効
    autoplay: {
      delay: 5000, // 自動再生の遅延時間（ミリ秒）
    },
    spaceBetween: 24, // スライド間の余白
    allowTouchMove: false, // ユーザーのスワイプ操作を無効にする
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  // Campaignスワイパーここまで


// Information 画像アニメーション




  // サンプル

//   // ファーストビュースライダー
// var swiper01 = new Swiper(".fv-swiper", {
//   loop: true,
//   effect: "fade",
//   autoplay: {
//     delay: 4000,
//     disableOnInteraction: false
//   },
//   speed: 2000,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true
//   }
// });

// // キャンペーンカードスライダー
// var mySwiper02 = new Swiper('.campaign-swiper ', {
//   loop: true,
//   loopSlide: 8,
//   speed: 2000,
//   slidesPerView: '1.22',
//   spaceBetween: 24,
//   grabCursor: true,
//   width: 280,
//   autoplay: {
//     delay: 2000,
//     disableOnInteraction: false
//   },
//   breakpoints: {
//     768: {
//       spaceBetween: 40,
//       slidesPerView: '3.5',
//       width: 1265.5
//     },
//     1920: {
//       slidesPerView: "5",
//       spaceBetween: 40,
//       width: 1825
//     }
//   },
//   pagination: {
//     el: '.js-campaign-card .swiper-pagination',
//     clickable: true
//   },
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev'
//   }
// });








// // Swiper スワイパー(FV)
// let fvSwiper = new Swiper(".fv-swiper", {
//   loop: true, // ループ有効
//   autoplay: {
//     delay: 3000, // 自動再生の遅延時間（ミリ秒）
//   },
//   slidesPerView: 1, // 1度に1枚のスライドを表示
//   allowTouchMove: false, // ユーザーのスワイプ操作を無効にする
// });

// // Campaignスワイパー
// let slidesPerViewResponsive = 1; // 初期値

// if (window.innerWidth >= 375) {
//   // 375px以上の場合、画面幅に合わせてスライド数を設定
//   slidesPerViewResponsive = Math.floor(window.innerWidth / 375); // スライド数は375pxのスライドを基準に調整
// }

// let campaignSwiper = new Swiper(".campaign-swiper", {
//   loop: true, // ループ有効
//   autoplay: {
//     delay: 5000, // 自動再生の遅延時間（ミリ秒）
//   },
//   slidesPerView: slidesPerViewResponsive, // スライド数を自動調整
//   spaceBetween: 24, // スライド間の余白
//   allowTouchMove: false, // ユーザーのスワイプ操作を無効にする
//   navigation: {
//     nextEl: '.campaign-swiper__btn-next', // 次のスライドへのナビゲーションボタン
//     prevEl: '.campaign-swiper__btn-prev', // 前のスライドへのナビゲーションボタン
//   },
// });







  
  
  

}); //jQuery 閉じタグ




