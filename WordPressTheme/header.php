<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- インデックス防止 -->
  <meta name="robots" content="noindex">
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header class="header js-header">
    <div class="header__inner">
      <!-- ヘッダーロゴ -->
      <h1 class="header__logo header-logo">
        <a href="index.html" class="header-logo__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.png" alt="ヘッダーロゴ">
        </a>
      </h1>
      <!-- ハンバーガー -->
      <button class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button><!-- /.header__hamburger hamburger js-hamburger -->
      <!-- SPナビ -->
      <div class="header__sp-nav js-drawer-menu">
        <nav class="global-nav">
          <div class="global-nav__items-wrapper--left">
            <ul class="global-nav__items global-nav__items--left01">
              <li class="global-nav__item">
                <a href="campaign.html" class="global-nav__heading">キャンペーン</a>
                <ul class="global-nav__sub-items">
                  <li class="global-nav__sub-item">
                    <a href="campaign.html">ライセンス取得</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="campaign.html">貸切体験ダイビング</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="campaign.html">ナイトダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="global-nav__item">
                <a href="about-us.html" class="global-nav__heading">私たちについて</a>
              </li>
            </ul>
            <ul class="global-nav__items global-nav__items--left02">
              <li class="global-nav__item">
                <a href="information.html" class="global-nav__heading">ダイビング情報</a>
                <ul class="global-nav__sub-items">
                  <li class="global-nav__sub-item">
                    <a href="information.html?tab=tab1">ライセンス講習</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="information.html?tab=tab2">体験ダイビング</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="information.html?tab=tab3">ファンダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="global-nav__item">
                <a href="blog.html" class="global-nav__heading">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="global-nav__items-wrapper--right">
            <ul class="global-nav__items global-nav__items--right01">
              <li class="global-nav__item">
                <a href="voice.html" class="global-nav__heading">お客様の声</a>
              </li>
              <li class="global-nav__item">
                <a href="price.html" class="global-nav__heading">料金一覧</a>
                <ul class="global-nav__sub-items">
                  <li class="global-nav__sub-item">
                    <a href="price.html">ライセンス講習</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="price.html">体験ダイビング</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="price.html">ファンダイビング</a>
                  </li>
                  <li class="global-nav__sub-item">
                    <a href="price.html">スペシャルダイビング</a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="global-nav__items global-nav__items--right02">
              <li class="global-nav__item">
                <a href="faq.html" class="global-nav__heading">よくある質問</a>
              </li>
              <li class="global-nav__item">
                <a href="privacy-policy.html" class="global-nav__heading">プライバシー<br class="u-mobile">ポリシー</a>
              </li>
              <li class="global-nav__item">
                <a href="terms.html" class="global-nav__heading">利用規約</a>
              </li>
              <li class="global-nav__item">
                <a href="contact.html" class="global-nav__heading global-nav__heading--contact">お問い合わせ</a>
              </li>
              <li class="global-nav__item">
                <a href="site-map.html" class="global-nav__heading global-nav__heading--contact">サイトマップ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div><!-- /.header__sp-nav js-drawer-menu -->
      <!-- PCナビ -->
      <div class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item current">
            <a href="campaign.html" class="pc-nav__link">
              campaign
              <span>キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="about-us.html" class="pc-nav__link">
              about us
              <span>私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="information.html" class="pc-nav__link">
              information
              <span>タイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="blog.html" class="pc-nav__link">
              blog
              <span>ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="voice.html" class="pc-nav__link">
              voice
              <span>お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="price.html" class="pc-nav__link">
              price
              <span>料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="faq.html" class="pc-nav__link uppercase">
              faq
              <span>よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="contact.html" class="pc-nav__link">
              contact
              <span>お問い合わせ</span>
            </a>
          </li>
        </ul>
      </div><!-- /.header__pc-nav pc-nav -->
    </div><!-- /.header__inner inner -->
  </header><!-- /.header -->
  <!-- ヘッダーここまで -->