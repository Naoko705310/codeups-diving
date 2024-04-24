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
              <!-- SPナビ -->
              <div class="header__sp-nav js-drawer-menu">
          <nav class="sp-nav">
            <div class="sp-nav__items-wrapper--left">
              <ul class="sp-nav__items sp-nav__items--left01">
                <li class="sp-nav__item">
                  <a href="campaign.html" class="sp-nav__heading">キャンペーン</a>
                  <ul class="sp-nav__sub-items">
                    <li class="sp-nav__sub-item">
                      <a href="campaign.html">ライセンス取得</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="campaign.html">貸切体験ダイビング</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="campaign.html">ナイトダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <a href="about-us.html" class="sp-nav__heading">私たちについて</a>
                </li>
              </ul>
              <ul class="sp-nav__items sp-nav__items--left02">
                <li class="sp-nav__item">
                  <a href="information.html" class="sp-nav__heading">ダイビング情報</a>
                  <ul class="sp-nav__sub-items">
                    <li class="sp-nav__sub-item">
                      <a href="information.html?tab=tab1">ライセンス講習</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="information.html?tab=tab2">体験ダイビング</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="information.html?tab=tab3">ファンダイビング</a>
                    </li>
                  </ul>
                </li>
                <li class="sp-nav__item">
                  <a href="blog.html" class="sp-nav__heading">ブログ</a>
                </li>
              </ul>
            </div>
            <div class="sp-nav__items-wrapper--right">
              <ul class="sp-nav__items sp-nav__items--right01">
                <li class="sp-nav__item">
                  <a href="voice.html" class="sp-nav__heading">お客様の声</a>
                </li>
                <li class="sp-nav__item">
                  <a href="price.html" class="sp-nav__heading">料金一覧</a>
                  <ul class="sp-nav__sub-items">
                    <li class="sp-nav__sub-item">
                      <a href="price.html">ライセンス講習</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="price.html">体験ダイビング</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="price.html">ファンダイビング</a>
                    </li>
                    <li class="sp-nav__sub-item">
                      <a href="price.html">スペシャルダイビング</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="sp-nav__items sp-nav__items--right02">
                <li class="sp-nav__item">
                  <a href="faq.html" class="sp-nav__heading">よくある質問</a>
                </li>
                <li class="sp-nav__item">
                  <a href="privacy-policy.html" class="sp-nav__heading">プライバシー<br class="u-mobile">ポリシー</a>
                </li>
                <li class="sp-nav__item">
                  <a href="terms.html" class="sp-nav__heading">利用規約</a>
                </li>
                <li class="sp-nav__item">
                  <a href="contact.html" class="sp-nav__heading sp-nav__heading--contact">お問い合わせ</a>
                </li>
                <li class="sp-nav__item">
                  <a href="site-map.html" class="sp-nav__heading sp-nav__heading--contact">サイトマップ</a>
                </li>
              </ul>
            </div>
          </nav>
        </div><!-- /.header__sp-nav js-drawer-menu -->




      <!-- PCナビ -->
      <div class="header__pc-nav pc-nav u-desktop">
        <?php wp_nav_menu( array(
          'theme_location' => 'pc_nav',
          'container' => false, // コンテナを無効化
          'menu_class' => 'pc-nav__items', // <ul> タグに適用するクラス
          'items_wrap' => '<ul class="%2$s">%3$s</ul>', // <ul> タグのラップ方法
        )); ?>
      </div>
    </div><!-- /.header__inner inner -->
  </header><!-- /.header -->
  <!-- ヘッダーここまで -->