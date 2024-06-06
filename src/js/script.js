jQuery(function ($) {
  // $(document).ready()の略式であり、DOMが読み込まれたときに指定された関数を実行します。

  /* --------------------------------------------
  /* ハンバーガーメニュー
  /* -------------------------------------------- */

  // ハンバーガーメニューのクリックイベント
  $(".js-hamburger").on("click", function (event) {
    console.log("Hamburger clicked");
    if ($(this).hasClass("is-open")) {
      console.log("Menu is open, closing now");
      closeDrawerMenu();
    } else {
      console.log("Menu is closed, opening now");
      $(".js-drawer-menu").fadeIn();
      $(this).addClass("is-open");
      $("body").css("overflow", "hidden");
      $(".js-header").css("background-color", "#408F95");
    }
});




  // これに書き換えても違いなし
//   $(".js-hamburger").on("click", function (event) {
//     event.stopPropagation();
//     if ($(this).hasClass("is-open")) {
//       closeDrawerMenu();
//     } else {
//       $(".js-drawer-menu").fadeIn();
//       $(this).addClass("is-open");
//       $("body").css("overflow", "hidden");
//       $(".js-header").css("background-color", "#408F95");
//     }
// });





  // $(".js-hamburger").on("click", function () {
  //   if ($(this).hasClass("is-open")) {
  //     closeDrawerMenu(); // メニューを閉じる関数を呼び出す
  //   } else {
  //     $(".js-drawer-menu").fadeIn();
  //     $(this).addClass("is-open");
  //     // メニューが開いたときにスクロールを無効にする
  //     $("body").css("overflow", "hidden");
  //     // メニューが開いたときに背景色を設定
  //     $(".js-header").css("background-color", "#408F95");
  //   }
  // });

  // ナビのリンクがクリックされたときの処理
  $(".global-nav__link, .global-nav__heading").on("click", function () {
    closeDrawerMenu(); // メニューを閉じる関数を呼び出す

    // ナビのリンクからhref属性を取得し、該当のセクションへスクロール
    var targetSection = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(targetSection).offset().top,
      },
      1000
    ); // スクロールのアニメーション時間を調整
  });

  // メニューを閉じる関数
  function closeDrawerMenu() {
    $(".js-drawer-menu").fadeOut();
    $(".js-hamburger").removeClass("is-open");
    // メニューが閉じたときにスクロールを有効にする
    $("body").css("overflow", "auto");
    // ヘッダーの背景色を元に戻す
    $(".js-header").css("background-color", "");
  }

  // ページ読み込み時にPC幅を検出し、768pxを超えたときにメニューを閉じる
  $(window).resize(function () {
    if ($(window).width() > 768) {
      closeDrawerMenu(); // PC幅を超えたらメニューを閉じる
    }
  });

  // ページ読み込み時にもPC幅を超えたらメニューを閉じる
  if ($(window).width() > 768) {
    closeDrawerMenu();
  }

  /* --------------------------------------------
  /* トップページのFVスワイパー
  /* -------------------------------------------- */

  var topFvSwiper = new Swiper(".js-top-fv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false, // ユーザーのスワイプ操作を無効にする
    autoplay: {
      delay: 3000,
    },
    slidesPerView: 1, // 1度に1枚のスライドを表示
  });

  /* --------------------------------------------
  /* トップページのCampaignスワイパー
  /* -------------------------------------------- */

  var campaignSwiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    speed: 4000, // スライド完了までの時間
    autoplay: {
      delay: 4000, // 次のスライドまでの遅延時間
    },
    allowTouchMove: false, // ユーザーのタッチ操作を無効にするかどうか
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40,
      },
    },
    direction: "horizontal",
    navigation: {
      prevEl: ".swiper-button-next",
      nextEl: ".swiper-button-prev",
    },
  });

  /* --------------------------------------------
  /* 画像出現アニメーション(カラーボックスの後に画像表示)
  /* -------------------------------------------- */
  //要素の取得とスピードの設定
  var box = $(".colorbox"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;

    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  }); 

  /* --------------------------------------------
  /* TOPへ戻るボタン
  /* -------------------------------------------- */
  const returnTop = document.querySelector(".js-button-to-top");
  const footer = document.querySelector("footer");
  const footerHeight = footer.clientHeight; // footerの高さを取得

  window.addEventListener("scroll", () => {
    let scrollY = window.scrollY;

    if (scrollY > 200) { //200px以上スクロールしたら、ボタン表示。
      returnTop.classList.add("active");
      // スクロール位置がfooterの上部20pxの位置に達したら非表示にする
      if (scrollY + window.innerHeight > footer.offsetTop - 20) {
        returnTop.style.display = "none"; // ボタンを非表示にする
      } else {
        returnTop.style.display = "block"; // ボタンを表示する
      }
    } else {
      returnTop.classList.remove("active");
      returnTop.style.display = "block"; // ボタンを表示する
    }
    { passive: true } // passive オプションを追加
  });

  /* --------------------------------------------
  /* 下層ページabout-us モーダル
  /* -------------------------------------------- */

  // クリックした写真の情報をモーダルに設定する
  $(".gallery__item").on("click", function () {
    var windowWidth = $(window).width();

    // スマートフォン以外の場合のみモーダルを表示
    if (windowWidth > 767) {
      var imageSrc = $(this).find("img").attr("src");
      var altText = $(this).find("img").attr("alt");

      // モーダルの画像とテキストを設定
      $(".modal__image-wrapper img")
        .attr("src", imageSrc)
        .attr("alt", altText);

      // モーダルを表示
      $(".js-modal").addClass("active");
    }
  });

  // モーダルを閉じる
  $(".js-modal").on("click", function (event) {
    // モーダル背景かモーダル内部がクリックされた場合は閉じる
    if (
      $(event.target).closest(".modal__background, .modal__image-wrapper")
        .length > 0
    ) {
      $(this).removeClass("active");
    }
  });

  // ウィンドウの幅によってモーダルを制御
  function checkWindowWidth() {
    var windowWidth = $(window).width();
    if (windowWidth <= 767) {
      // スマートフォンの場合
      $(".js-modal").removeClass("active");
    }
  }

  // ウィンドウがリサイズされたときにチェック
  $(window).resize(function () {
    checkWindowWidth();
  });

  // ページ読み込み時にもチェック
  checkWindowWidth();


  /* --------------------------------------------
  /* 下層ページ information ダイビング情報のタブ
  /* -------------------------------------------- */

    // ページが読み込まれたときの処理
    handleTabFromURL();
  
    // global-navのaタグがクリックされたときの処理
    $(".global-nav__sub-item a").on("click", function (e) {
      // e.preventDefault();
  
      // クリックしたリンクのhref属性からパラメーターを取得
      let href = $(this).attr("href");
      let params = getURLParams(href);
  
      // パラメーターが存在すれば対応するタブをアクティブにする
      if (params && params.tab) {
        // 対応するinformation.htmlのページに遷移する
        window.location.href = "information.html?tab=" + params.tab;
      }
    });
  
    // タブをクリックしたときの処理
    $(".js-tab-trigger").on("click", function (e) {
      e.preventDefault(); // デフォルトの動作をキャンセル
  
      // クリックしたタブのIDを取得
      let tabId = $(this).attr("id");
  
      // タブをアクティブにする関数を呼び出す
      activateTab(tabId);
  
      // URLのパラメーターを更新
      updateURLParams(tabId);
    });
  
    // パラメーターがある場合、対応するタブをアクティブにする
    function handleTabFromURL() {
      let params = getURLParams(window.location.href);
      if (params && params.tab) {
        activateTab(params.tab);
      }
    }
  
    // パラメーターからオブジェクトを取得する関数
    function getURLParams(url) {
      let params = {};
      let urlParts = url.split("?");
      if (urlParts.length > 1) {
        let paramString = urlParts[1];
        let pairs = paramString.split("&");
        for (let i = 0; i < pairs.length; i++) {
          let pair = pairs[i].split("=");
          params[pair[0]] = pair[1];
        }
      }
      return params;
    }
  
    // タブをアクティブにする関数
    function activateTab(tabId) {
      // まずは全triggerからclass削除
      $(".js-tab-trigger").removeClass("is-active");
      // 次に全targetからclass削除
      $(".js-tab-target").removeClass("is-active");
      // クリックしたタブにis-activeを追加
      $("#" + tabId).addClass("is-active");
      // 対応するタブコンテンツにis-activeを追加
      $("#" + tabId + "-content").addClass("is-active");
    }
  
    // URLのパラメーターを更新する関数
    function updateURLParams(tabId) {
      let url = window.location.href.split("?")[0];
      let newURL = url + "?tab=" + tabId;
      window.history.pushState({}, "", newURL);
    }

  /* --------------------------------------------
  /* 下層ページ ブログ詳細 アーカイブ（トグル）
  /* -------------------------------------------- */
  // 年をクリックしたとき
  $('.archive__year').click(function() {
    $(this).toggleClass('is-active'); // クリックされた要素にis-activeクラスをトグル
    $(this).next('.archive__month-list').slideToggle();
  });

  /* --------------------------------------------
  /* 下層ページ FAQ アコーディオン
  /* -------------------------------------------- */

    // ※それぞれのアコーディオンの操作が独立しているパターン。
    $(".js-accordion__title").on("click", function () {
      $(this).next().slideToggle();
      if ($(this).hasClass("show")) {
        $(this).removeClass("show");
      } else {
        $(this).addClass("show");
      }
    });

  // ※開閉操作をしているもの以外のアコーディオンは閉じるパターン。
  // $(".js-accordion__title").on("click", function () {
  //   // クリックされたタイトルの次の要素をトグル
  //   $(this).next().slideToggle();
    
  //   // クリックされたタイトル以外のアコーディオンを閉じる
  //   $(".js-accordion__content").not($(this).next()).slideUp();

  //   // クリックされたタイトルの表示/非表示のクラスを切り替える
  //   $(this).toggleClass("show");
    
  //   // 閉じられた他のタイトルの表示/非表示のクラスを削除する
  //   $(".js-accordion__title").not($(this)).removeClass("show");
  // });

  /* --------------------------------------------
  /* お問い合わせフォーム（バリデーション）
  /* -------------------------------------------- */
  // フォーム上部の、「※必須項目が入力されていません。入力してください。」メッセージは、Contact form7とは別で実装する。
  jQuery(document).ready(function($) {
    // 最初はエラーメッセージを隠す
    $('#js-error-message').hide();

    // Contact Form 7がエラーを検出した時にエラーメッセージを表示
    $(document).on('wpcf7invalid', function() {
      $('#js-error-message').show();
    });

    // お問い合わせ内容のテキスト
    // ※Contact form7のエラー検証は、送信する時のみ対象なので、リアルタイムのテキスト入力がされたかどうかのチェック機能は含まれていない。一度エラーになったテキストエリアに、文字を入力してエンターを押した時点でエラー解消するには、追加の記述↓が必要。
    $('textarea').on('keypress', function(e) {
      if (e.which == 13) { // エンターキーのキーコードは13
      $(this).blur().focus(); // フォーカスを一旦外して再度フォーカスを当てる
      }
    });

    // エラーメッセージをカスタマイズする
    // Contact Form 7の無効イベントにフック
  //   jQuery(document).ready(function($) {
  //     $(document).on('wpcf7invalid', function(event) {
  //         // 名前フィールドのエラーメッセージをカスタマイズ
  //         var nameError = $(event.target).find('input[name="text-979"]').closest('dd').find('.name-error');
  //         if (nameError.length) {
  //             nameError.text('お名前を入力してください');
  //         }
  
  //         // メールアドレスフィールドのエラーメッセージをカスタマイズ
  //         var emailError = $(event.target).find('input[name="email-987"]').closest('dd').find('.email-error');
  //         if (emailError.length) {
  //             emailError.text('有効なメールアドレスを入力してください');
  //         }
  
  //         // 電話番号フィールドのエラーメッセージをカスタマイズ
  //         var telError = $(event.target).find('input[name="tel-98"]').closest('dd').find('.tel-error');
  //         if (telError.length) {
  //             telError.text('有効な電話番号を入力してください');
  //         }
  
  //         // その他のフィールドも同様に設定
  //         // ...
  //     });
  // });
});








  // contact form7で実装したので、下記の記述は一旦非表示
//     //初期状態でエラーメッセージを非表示にする
//     $(".error-message").hide();

//     // 送信ボタンクリック時の必須項目入力チェック
//     $("#js-submit").on("click", function () {
//       // 全てのエラーメッセージをクリア
//       $(
//         ".error_required, .radio-error, .privacy-error, .drop-down-error, .email-error, .name-error, .tel-error, .privacy-error"
//       ).text("");

// // 要確認 エラー反映されていない
//       $(".required").each(function () {
//         if ($(this).val() == "") {
//           $(this).siblings("span.error_required").text("※入力必須項目です");
//           $(this).addClass("errored");
//         } else {
//           $(this).removeClass("errored");
//         }
//       });

//       var radioChecked = $(
//         "input[type='radio'][name='radio-name']:checked"
//       ).length;
//       if (radioChecked === 0) {
//         $(".radio-error").text("※ラジオボタンを選択してください.");
//       }

//       if ($("#drop-down").val() === "") {
//         $(".drop-down-error").text("※キャンペーンを選択してください.");
//       } else {
//         $(".drop-down-error").text(""); // 条件が成り立たない場合、エラーメッセージをクリア
//       }

//       var checkboxChecked = $("#checkbox:checked").length;
//       if (checkboxChecked === 0) {
//         $(".privacy-error").text("※個人情報保護方針に同意してください。");
//       }

//       var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//       var emailInput = $("#Email").val();
//       if (!emailRegex.test(emailInput)) {
//         $(".email-error").text(
//           "※正しいメールアドレスの形式で入力してください。"
//         );
//       }

//       var nameRegex = /^[ぁ-んァ-ヶ一-龠々ー　 ]+$/;
//       var nameInput = $("#name").val();
//       if (!nameRegex.test(nameInput)) {
//         $(".name-error").text("※全角文字で入力してください。");
//       }

//       var phoneNumberRegex = /^\d{2,5}-\d{1,4}-\d{4}$/;
//       var phoneNumberInput = $("#tel").val();
//       if (!phoneNumberRegex.test(phoneNumberInput)) {
//         $(".tel-error").text(
//           "※電話番号は半角数字とハイフンの組み合わせで入力してください。"
//         );
//       }

//       // エラーがある場合にエラーメッセージを表示
//       if (
//         $(".errored").length > 0 ||
//         radioChecked === 0 ||
//         $("#drop-down").val() === "" ||
//         checkboxChecked === 0 ||
//         !emailRegex.test(emailInput) ||
//         !nameRegex.test(nameInput) ||
//         !phoneNumberRegex.test(phoneNumberInput)
//       ) {
//         $(".error-message").show(); // エラーメッセージを表示
//         return false; // フォーム送信をキャンセル
//       } else {
//         $(".error-message").hide(); // エラーメッセージを非表示
//       }
//     });
// 中身の記述はここまで
}); //jQuery 閉じタグ
