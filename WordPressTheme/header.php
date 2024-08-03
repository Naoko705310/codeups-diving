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
      <!-- ヘッダーロゴ ※front-pageはh1, 下層ページはdiv-->
      <<?php echo esc_attr(is_front_page() ? 'h1' : 'div'); ?> class="header__logo header-logo">
        <a href="<?php echo esc_url(home_url()); ?>" class="header-logo__link">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/header-logo.png')); ?>" alt="<?php echo esc_attr('ヘッダーロゴ'); ?>">
        </a>
      </<?php echo esc_attr(is_front_page() ? 'h1' : 'div'); ?>>
      <!-- ハンバーガー -->
      <button class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- SPナビ -->
      <div class="header__sp-nav js-drawer-menu">
        <nav class="sp-nav">
          <div class="sp-nav__items-wrapper--left">
            <ul class="sp-nav__items sp-nav__items--left01">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="sp-nav__heading">キャンペーン</a>
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/campaign/?category=license-training')); ?>">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/campaign/?category=fun-diving')); ?>">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/campaign/?category=trial-diving')); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="sp-nav__heading">私たちについて</a>
              </li>
            </ul>
            <ul class="sp-nav__items sp-nav__items--left02">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/information/')); ?>" class="sp-nav__heading">ダイビング情報</a>
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/information/?tab=tab1')); ?>">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/information/?tab=tab2')); ?>">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/information/?tab=tab3')); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="sp-nav__heading">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="sp-nav__items-wrapper--right">
            <ul class="sp-nav__items sp-nav__items--right01">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="sp-nav__heading">お客様の声</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/price/')); ?>" class="sp-nav__heading">料金一覧</a>
                <ul class="sp-nav__sub-items">
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#license')); ?>">ライセンス講習</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#trial')); ?>">体験ダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#fun')); ?>">ファンダイビング</a>
                  </li>
                  <li class="sp-nav__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#special')); ?>">スペシャルダイビング</a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="sp-nav__items sp-nav__items--right02">
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="sp-nav__heading">よくある質問</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>" class="sp-nav__heading">プライバシーポリシー</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>" class="sp-nav__heading">利用規約</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="sp-nav__heading sp-nav__heading--contact">お問い合わせ</a>
              </li>
              <li class="sp-nav__item">
                <a href="<?php echo esc_url(home_url('/sitemap/')); ?>" class="sp-nav__heading sp-nav__heading--contact">サイトマップ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- PCナビ -->
      <div class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="pc-nav__link">
              campaign
              <span><?php echo esc_html('キャンペーン'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="pc-nav__link">
              about us
              <span><?php echo esc_html('私たちについて'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="pc-nav__link">
              information
              <span><?php echo esc_html('ダイビング情報'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="pc-nav__link">
              blog
              <span><?php echo esc_html('ブログ'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="pc-nav__link">
              voice
              <span><?php echo esc_html('お客様の声'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="pc-nav__link">
              price
              <span><?php echo esc_html('料金一覧'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="pc-nav__link uppercase">
              faq
              <span><?php echo esc_html('よくある質問'); ?></span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="pc-nav__link">
              contact
              <span><?php echo esc_html('お問い合わせ'); ?></span>
            </a>
          </li>
        </ul>
      </div>
    </div><!-- /.header__inner inner -->
  </header><!-- /.header -->
  <!-- ヘッダーここまで -->
