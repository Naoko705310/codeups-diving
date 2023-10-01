
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

  // FV スワイパー
  var fvSwiper = new Swiper('.js-fv-swiper', {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,// ユーザーのスワイプ操作を無効にする
    autoplay: {
        delay: 3000// 自動再生の遅延時間（ミリ秒）
    },
    slidesPerView: 1, // 1度に1枚のスライドを表示
  });

  // Campaign スワイパー
  var campaignSwiper = new Swiper('.js-campaign-swiper', {
    loop: true,
    speed: 4000, // ループの時間
    // autoplay: {
    //   delay: 0,
    // },
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
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-prev',
      prevEl: '.swiper-button-next',
    },
  });


  // 画像出現アニメーション(カラーボックスの後に画像表示)
  //要素の取得とスピードの設定
  var box = $('.colorbox'),
      speed = 700;  

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
      if(counter == 0){
      $(this).delay(200).animate({'width':'100%'},speed,function(){
          image.css('opacity','1');
          $(this).css({'left':'0' , 'right':'auto'});
          $(this).animate({'width':'0%'},speed);
      })
          counter = 1;
        }
      });
  });//画像エフェクト閉じタグ

  // TOPへ戻るボタン
  const returnTop = document.querySelector('.js-button-to-top');
  const footer = document.querySelector('footer'); 
  const footerHeight = footer.clientHeight; // footerの高さを取得
  window.addEventListener('scroll', () => {
    let scrollY = window.scrollY;
    
    if (scrollY > 768) {
      returnTop.classList.add('active');
      // スクロール位置がfooterの上に達したらボタンの色を変更
      if (scrollY + window.innerHeight > footer.offsetTop) {
        returnTop.classList.add('change-color'); // change-colorクラスを追加してボタンの色を変更
      } else {
        returnTop.classList.remove('change-color'); // change-colorクラスを削除して通常の色に戻す
      }
    } else {
      returnTop.classList.remove('active');
      returnTop.classList.remove('change-color'); // スクロール位置が768未満の場合も色を通常に戻す
    }
  });
}); //jQuery 閉じタグ




