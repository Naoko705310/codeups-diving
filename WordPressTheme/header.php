<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- インデックス防止 -->
  <meta name="robots" content="noindex">

  <!-- WP管理メニューが邪魔なので下に下げる。 不要になったら削除-->
  <?php if( is_user_logged_in() ) : ?>
      <style type="text/css">
      html {
        margin: 0 0 32px!important;
      }
      #wpadminbar {
        top: unset!important;
        bottom: 0;
      }
      </style>
  <?php endif; ?>
  <!-- WP管理メニューを下に下げる、ここまで -->


  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header class="header js-header">
    <div class="header__inner">
      <!-- ヘッダーロゴ -->
      <h1 class="header__logo header-logo">
      <a href="<?php echo home_url(); ?>" class="header-logo__link">
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
      <!-- オリジナルのコード↓ -->
      <!-- ※管理画面の外観＞メニューからナビゲーションを追加して実装しようとしたが、失敗したためオリジナルに戻した。 -->
      <div class="header__sp-nav js-drawer-menu">
        <nav class="sp-nav">
          <div class="sp-nav__items-wrapper--left">
            <ul class="sp-nav__items sp-nav__items--left01">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="sp-nav__heading">キャンペーン</a>
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'license-training', get_post_type_archive_link('campaign'))); ?>">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'fun-diving', get_post_type_archive_link('campaign'))); ?>">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'trial-diving', get_post_type_archive_link('campaign'))); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="sp-nav__heading">私たちについて</a>
              </li>
            </ul>
            <ul class="sp-nav__items sp-nav__items--left02">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="sp-nav__heading">ダイビング情報</a>
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab1', get_permalink(get_page_by_path('information')))); ?>">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab2', get_permalink(get_page_by_path('information')))); ?>">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab3', get_permalink(get_page_by_path('information')))); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="sp-nav__heading">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="sp-nav__items-wrapper--right">
            <ul class="sp-nav__items sp-nav__items--right01">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="sp-nav__heading">お客様の声</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="sp-nav__heading">料金一覧</a>
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#license'; ?>">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#trial'; ?>">体験ダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#fun'; ?>">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#special'; ?>">スペシャルダイビング</a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="sp-nav__items sp-nav__items--right02">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="sp-nav__heading">よくある質問</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="sp-nav__heading">プライバシーポリシー</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="sp-nav__heading">利用規約</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="sp-nav__heading sp-nav__heading--contact">お問い合わせ</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('sitemap'))); ?>" class="sp-nav__heading sp-nav__heading--contact">サイトマップ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>


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