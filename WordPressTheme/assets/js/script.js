"use strict";

jQuery(function ($) {
  // $(document).ready()の略式であり、DOMが読み込まれたときに指定された関数を実行します。

  /* --------------------------------------------
  /* ハンバーガーメニュー
  /* -------------------------------------------- */
  // ハンバーガーメニューのクリックイベント
  $(".js-hamburger").on("click", function (event) {
    event.preventDefault(); // デフォルトのイベント行動をキャンセル
    event.stopImmediatePropagation(); // イベント伝播の即時停止
    console.log("Hamburger clicked");
    if ($(this).hasClass("is-open")) {
      console.log("Menu is open, now closing...");
      closeDrawerMenu();
    } else {
      console.log("Menu is closed, now opening...");
      openDrawerMenu();
    }
  });

  // ドロワーメニューを開く関数
  function openDrawerMenu() {
    console.log("Opening drawer menu...");
    $(".js-drawer-menu").fadeIn();
    $(".js-hamburger").addClass("is-open");
    $("body").css("overflow", "hidden");
    $(".js-header").css("background-color", "#408F95");
  }

  // ドロワーメニューを閉じる関数
  function closeDrawerMenu() {
    console.log("Closing drawer menu...");
    $(".js-drawer-menu").fadeOut();
    $(".js-hamburger").removeClass("is-open");
    $("body").css("overflow", "auto");
    $(".js-header").css("background-color", "");
  }

  // 画面幅が768pxを超えたらメニューを閉じる
  $(window).on("resize", function () {
    if ($(window).width() > 768) {
      if ($(".js-hamburger").hasClass("is-open")) {
        console.log("Window resized to more than 768px, closing menu...");
        closeDrawerMenu();
      }
    }
  });

  // ページ読み込み時に画面幅が768pxを超えたらメニューを閉じる
  if ($(window).width() > 768) {
    if ($(".js-hamburger").hasClass("is-open")) {
      console.log("Page loaded with width more than 768px, closing menu...");
      closeDrawerMenu();
    }
  }

  // ドロワーメニュー内のリンクをクリックしたときにメニューを閉じる
  $(".sp-nav__sub-item a").on("click", function (event) {
    if ($(".js-hamburger").hasClass("is-open")) {
      closeDrawerMenu();
    }
  });

  /* --------------------------------------------
  /* トップページのFVスワイパー
  /* -------------------------------------------- */

  var topFvSwiper = new Swiper(".js-top-fv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    // ユーザーのスワイプ操作を無効にする
    autoplay: {
      delay: 3000
    },
    slidesPerView: 1 // 1度に1枚のスライドを表示
  });

  /* --------------------------------------------
  /* トップページのCampaignスワイパー
  /* -------------------------------------------- */

  var campaignSwiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    speed: 4000,
    // スライド完了までの時間
    autoplay: {
      delay: 4000 // 次のスライドまでの遅延時間
    },

    allowTouchMove: false,
    // ユーザーのタッチ操作を無効にするかどうか
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    },
    direction: "horizontal",
    navigation: {
      prevEl: ".swiper-button-next",
      nextEl: ".swiper-button-prev"
    }
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
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  /* --------------------------------------------
  /* TOPへ戻るボタン
  /* -------------------------------------------- */
  var returnTop = document.querySelector(".js-button-to-top");
  var footer = document.querySelector("footer");
  var footerHeight = footer.clientHeight; // footerの高さを取得

  window.addEventListener("scroll", function () {
    var scrollY = window.scrollY;
    if (scrollY > 200) {
      //200px以上スクロールしたら、ボタン表示。
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

    {
      passive: true;
    } // passive オプションを追加
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
      $(".modal__image-wrapper img").attr("src", imageSrc).attr("alt", altText);

      // モーダルを表示
      $(".js-modal").addClass("active");
    }
  });

  // モーダルを閉じる
  $(".js-modal").on("click", function (event) {
    // モーダル背景かモーダル内部がクリックされた場合は閉じる
    if ($(event.target).closest(".modal__background, .modal__image-wrapper").length > 0) {
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

  // footer-navとsp-navのaタグがクリックされたときの処理
  $(".footer-nav__sub-item a, .sp-nav__sub-item a").on("click", function (e) {
    // e.preventDefault();

    // クリックしたリンクのhref属性からパラメーターを取得
    var href = $(this).attr("href");
    var params = getURLParams(href);

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
    var tabId = $(this).attr("id");

    // タブをアクティブにする関数を呼び出す
    activateTab(tabId);

    // URLのパラメーターを更新
    updateURLParams(tabId);
  });

  // パラメーターがある場合、対応するタブをアクティブにする
  function handleTabFromURL() {
    var params = getURLParams(window.location.href);
    if (params && params.tab) {
      activateTab(params.tab);
    }
  }

  // パラメーターからオブジェクトを取得する関数
  function getURLParams(url) {
    var params = {};
    var urlParts = url.split("?");
    if (urlParts.length > 1) {
      var paramString = urlParts[1];
      var pairs = paramString.split("&");
      for (var i = 0; i < pairs.length; i++) {
        var pair = pairs[i].split("=");
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
    var url = window.location.href.split("?")[0];
    var newURL = url + "?tab=" + tabId;
    window.history.pushState({}, "", newURL);
  }

  /* --------------------------------------------
  /* 下層ページ ブログ詳細 アーカイブ（トグル）
  /* -------------------------------------------- */
  // 年をクリックしたとき
  $('.archive__year').click(function () {
    $(this).toggleClass('is-active'); // クリックされた要素にis-activeクラスをトグル
    $(this).next('.archive__month-list').slideToggle();
  });

  /* --------------------------------------------
  /* 下層ページ FAQ アコーディオン
  /* -------------------------------------------- */
  // .showクラスのつけ外しで、プラスマイナスマークを切り替える。
  // ※WP実装後に不具合発生。→アニメーションが完了してからクラスのつけ外しする処理を追加

  // クリックイベントでアコーディオンの開閉をトグル
  $('.js-accordion-title').click(function () {
    var content = $(this).next('.accordion__content');
    if ($(this).hasClass('show')) {
      content.slideUp(300, function () {
        // アニメーションが完了した後にクラスを削除
        $(this).prev('.js-accordion-title').removeClass('show');
      });
    } else {
      content.slideDown(300, function () {
        // アニメーションが完了した後にクラスを追加
        $(this).prev('.js-accordion-title').addClass('show');
      });
    }
  });

  /* --------------------------------------------
  /* お問い合わせフォーム（バリデーション）
  /* -------------------------------------------- */
  // フォーム上部の、「※必須項目が入力されていません。入力してください。」メッセージは、Contact form7とは別で実装する。
  jQuery(document).ready(function ($) {
    // 最初はエラーメッセージを隠す
    $('#js-error-message').hide();

    // Contact Form 7がエラーを検出した時にエラーメッセージを表示
    $(document).on('wpcf7invalid', function () {
      $('#js-error-message').show();
    });

    // お問い合わせ内容のテキスト
    // ※Contact form7のエラー検証は、送信する時のみ対象なので、リアルタイムのテキスト入力がされたかどうかのチェック機能は含まれていない。一度エラーになったテキストエリアに、文字を入力してエンターを押した時点でエラー解消するには、追加の記述↓が必要。
    $('textarea').on('keypress', function (e) {
      if (e.which == 13) {
        // エンターキーのキーコードは13
        $(this).blur().focus(); // フォーカスを一旦外して再度フォーカスを当てる
      }
    });
  });
}); //jQuery 閉じタグ