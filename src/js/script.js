
jQuery(function ($) {
  // ハンバーガーメニュー（FadeInすなわちdisplay:blockにする）
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      closeDrawerMenu(); // メニューを閉じる関数を呼び出す
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
      // メニューが開いたときにスクロールを無効にする
      $('body').css('overflow', 'hidden');
      // メニューが開いたときにヘッダーの色を設定
      $('.js-header').css('background-color', '#408F95'); // 背景色を設定
    }
  });

  // ナビのリンクがクリックされたときの処理
  $('.global-nav__link, .global-nav__heading').on('click', function () {
    closeDrawerMenu(); // メニューを閉じる関数を呼び出す
    // ナビのリンクからhref属性を取得し、該当のセクションへスクロール
    var targetSection = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(targetSection).offset().top
    }, 1000); // スクロールのアニメーション時間を調整
  });

  // メニューを閉じる関数
  function closeDrawerMenu() {
    $('.js-drawer-menu').fadeOut();
    $('.js-hamburger').removeClass('is-open');
    // メニューが閉じたときにスクロールを有効にする
    $('body').css('overflow', 'auto');
    // メニューが閉じたときにヘッダーの色を元に戻す
    $('.js-header').css('background-color', '');
  }

  // メディアクエリを使用してPC幅を検出し、768pxを超えたときにメニューを閉じる
  $(window).resize(function () {
    if ($(window).width() > 768) {
      closeDrawerMenu(); // PC幅を超えたらメニューを閉じる
    }
  });

  // ページ読み込み時にもメディアクエリをチェックしてメニューを閉じる
  $(document).ready(function () {
    if ($(window).width() > 768) {
      closeDrawerMenu(); // ページ読み込み時にもPC幅を超えたらメニューを閉じる
    }
  });

  // fv スワイパー
  var topFvSwiper = new Swiper('.js-top-fv-swiper', {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,// ユーザーのスワイプ操作を無効にする
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 1, // 1度に1枚のスライドを表示
  });

  // Campaign スワイパー
  var campaignSwiper = new Swiper('.js-campaign-swiper', {
    loop: true,
    speed: 4000,
    autoplay: {
      delay: 3000,
    },
    allowTouchMove: true,
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    },
    direction: 'horizontal', 
    navigation: {
      prevEl: '.swiper-button-next', // prevボタンに右矢印を指定
      nextEl: '.swiper-button-prev', // nextボタンに左矢印を指定
    },
  });//スワイパーここまで

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
      // スクロール位置がfooterの上部20pxの位置に達したら非表示にする
      if (scrollY + window.innerHeight > footer.offsetTop - 20) {
        returnTop.style.display = 'none'; // ボタンを非表示にする
      } else {
        returnTop.style.display = 'block'; // ボタンを表示する
      }
    } else {
      returnTop.classList.remove('active');
      returnTop.style.display = 'block'; // ボタンを表示する
    }
  });

  // page-about-us モーダル
  $(document).ready(function() {
    // クリックした写真の情報をモーダルに設定する
    $(".gallery__item").on("click", function() {
      var imageSrc = $(this).find("img").attr("src");
      var altText = $(this).find("img").attr("alt");
  
      // モーダルの画像とテキストを設定
      $(".modal__image-wrapper img").attr("src", imageSrc);
      $(".modal__image-wrapper img").attr("alt", altText);
  
      // モーダルを表示
      $(".js-modal").addClass("active");
    });
  
    // モーダルを閉じる
    $(".js-modal").on("click", function() {
      $(this).removeClass("active");
    });
  
    // モーダル内の画像クリック時にモーダルを閉じない
    $(".modal__image-wrapper img").on("click", function(event) {
      event.stopPropagation();
    });
  });

  //FAQ下層ページ（アコーディオン）
  $(document).ready(function () {
    // クリックした時の処理
    $('.js-accordion-Q').click(function () {
      // クリックされた要素の次の要素を取得
      var content = $(this).next('.accordion-content');

      // クリックされた要素の次の要素が開いているかどうかを判定
      if (content.hasClass('is-open')) {
        // 開いている場合は閉じる
        content.removeClass('is-open');
      } else {
        // 閉じている場合は開く
        content.addClass('is-open');
      }
    });
  });









  // $(".js-accordion-Q").click(function() {
  //   // クリックしたアコーディオン要素の次の要素を取得
  //   var $accordionContent = $(this).next(".accordion-content");

  //   if ($accordionContent.length > 0) {
  //     // 他のアコーディオンを閉じる
  //     $(".js-accordion-Q").not(this).removeClass("is-active");
  //     $(".accordion-content").not($accordionContent).removeClass("is-open");

  //     // クリックしたアコーディオン要素にクラスを追加
  //     $(this).toggleClass("is-active");

  //     // クリックしたアコーディオンの次の要素にクラスを追加
  //     $accordionContent.toggleClass("is-open");
  //   }
  // });//アコーディオン閉じる
  

}); //jQuery 閉じタグ




