
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
  }); //アコーディオンここまで



  // お問合せフォーム（バリデーション）
// お問合せフォーム（バリデーション）
  // 必須項目が入力されていない場合、エラーメッセージを表示。必須項目が全て入力されるまで、フォームを送信できないようにする
  $(document).ready(function () {
    // ページ読み込み時にエラーメッセージを非表示にする
    $(".radio-error").text(""); // ラジオボタンエラーメッセージをクリア
    $(".privacy-error").text(""); // チェックボックスエラーメッセージをクリア
  
    // 送信ボタンクリック時の必須項目入力チェック
    //#js-submitをクリックした時に、
    $("#js-submit").on('click', function () {
      //.requiredクラスをチェックする。
      $(".required").each(function () {
        //もし
        if ($(this).val() == "") {
          $(this).siblings('span.error_required').text("※入力必須項目です");
          //.erroredを付与
          $(this).addClass("errored");
        } else {
          $(this).siblings('span.error_required').text(""); 
          // 入力が正しい場合、.erroredを消す
          $(this).removeClass("errored");
        }
      });
  
      // radioCheckedにinput typeとnameを代入する。
      var radioChecked = $("input[type='radio'][name='radio-name']:checked").length;
      // もしラジオボタンのチェックが入っていなかったら、.radio-errorを表示
      if (radioChecked === 0) {
        $(".radio-error").text("※ラジオボタンを選択してください.");
      } else {
      // ラジオボタンが正しく選択された場合、エラーメッセージをクリア
        $(".radio-error").text(""); 
      }

      // 要修正（メッセージが表示されない）
      // キャンペーンプルダウンが選択されていない場合、エラーメッセージを表示
      if ($("#pull-down").val() === "") {
        $(".pull-down-error").text("※キャンペーンを選択してください.");
        } else {
            // プルダウンが正しく選択された場合、エラーメッセージをクリア
            $(".pull-down-error").text("");
        }

  
      // checkboxCheckedに#checkbox:checkedを代入する。
      var checkboxChecked = $("#checkbox:checked").length;
      // もしチェックが入っていなかったら、.privacy-errorを表示
      if (checkboxChecked === 0) {
        $(".privacy-error").text("※個人情報保護方針に同意してください。");
      } else {
        // チェックボックスが正しく選択された場合、エラーメッセージをクリア
        $(".privacy-error").text(""); 
      }
  
      // メールアドレスの正規表現チェック
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      var emailInput = $("#Email").val();
      if (!emailRegex.test(emailInput)) {
        $(".email-error").text("※正しいメールアドレスの形式で入力してください。");
      } else {
        $(".email-error").text(""); // メールアドレスが正しい場合、エラーメッセージをクリア
      }
  
      // 名前の正規表現チェック
      var nameRegex = /^[ぁ-んァ-ヶ一-龠々ー　 ]+$/;
      var nameInput = $("#name").val();
      if (!nameRegex.test(nameInput)) {
        $(".name-error").text("※全角文字で入力してください。");
      } else {
        $(".name-error").text(""); // 名前が正しい場合、エラーメッセージをクリア
      }
  
      // 電話番号の正規表現チェック
      var phoneNumberRegex = /^\d{2,5}-\d{1,4}-\d{4}$/;
      var phoneNumberInput = $("#tel").val();
      if (!phoneNumberRegex.test(phoneNumberInput)) {
        $(".tel-error").text("※電話番号は半角数字とハイフンの組み合わせで入力してください。");
      } else {
        $(".tel-error").text(""); // 電話番号が正しい場合、エラーメッセージをクリア
      }
  
      if (
        $(".errored").length ||
        radioChecked === 0 ||
        checkboxChecked === 0 ||
        !emailRegex.test(emailInput) ||
        !nameRegex.test(nameInput) ||
        !phoneNumberRegex.test(phoneNumberInput)
      ) {
        return false;
      }
    });
  });
  // お問合せフォームここまで

}); //jQuery 閉じタグ




