
jQuery(function ($) {
  // ハンバーガーメニュー（FadeInすなわちdisplay:blockにする）
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').fadeOut();
      $(this).removeClass('is-open');
      // メニューが閉じたときにスクロールを有効にする
      $('body').css('overflow', 'auto');
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
      // メニューが開いたときにスクロールを無効にする
      $('body').css('overflow', 'hidden');
    }
  }); // ハンバーガー：閉じタグ

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

}); //jQuery 閉じタグ







// jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

//   //ハンバーガーメニュー（FadeInすなわちdisplay:blockにする）
//   $('.js-hamburger').on('click', function () {
//     if ($('.js-hamburger').hasClass('is-open')) {
//       $('.js-drawer-menu').fadeOut();
//       $(this).removeClass('is-open');
//     } else {
//       $('.js-drawer-menu').fadeIn();
//       $(this).addClass('is-open');
//     }
//   }); //ハンバーガー：閉じタグ

// //ヘッダーの色を変える（FadeInすなわちdisplay:blockにする）
// $('.js-header').on('click', function () {
//   if ($('.js-header').hasClass('is-open')) {
//     $('.js-header').removeClass('is-open'); // .is-open クラスを削除
//     $('.js-header').css('background-color', ''); // 背景色をクリア（元に戻す）
//   } else {
//     $('.js-header').addClass('is-open'); // .is-open クラスを追加
//     $('.js-header').css('background-color', '$green'); // 背景色を設定
//   }
// });

// }); //jQuery 閉じタグ
