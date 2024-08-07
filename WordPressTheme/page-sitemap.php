<!-- site-map サイトマップ -->
<?php get_header(); ?>

<main>
  <!-- 下層 FV -->
  <section class="sub-fv">
    <div class="sub-fv__inner">
      <h1 class="sub-fv__heading">
        Site MAP
      </h1>
      <picture class="sub-fv__image">
        <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-site-map__fv-pc.jpg')); ?>" media="(min-width: 768px)">
        <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-site-map__fv-sp.jpg')); ?>" alt="<?php esc_attr_e('海中のサンゴの画像', 'text-domain'); ?>">
      </picture>
    </div>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>
  <!-- 下層 コンテンツ -->
  <div class="page-site-map page-layout">
    <div class="page-site-map__inner inner">
      <div class="page-site-map__contents-wrapper">
        <!-- サイトマップ -->
        <div class="site-map">
          <div class="site-map__items-wrapper--left">
            <ul class="site-map__items site-map__items--left01">
              <li class="site-map__item">
                <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="site-map__heading">キャンペーン</a>
                <ul class="site-map__sub-items">
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'license-training', get_post_type_archive_link('campaign'))); ?>">ライセンス講習</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'fun-diving', get_post_type_archive_link('campaign'))); ?>">ファンダイビング</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'trial-diving', get_post_type_archive_link('campaign'))); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="site-map__heading">私たちについて</a>
              </li>
            </ul>
            <ul class="site-map__items site-map__items--left02">
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/information/')); ?>" class="site-map__heading">ダイビング情報</a>
                <ul class="site-map__sub-items">
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab1', home_url('/information/'))); ?>">ライセンス講習</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab2', home_url('/information/'))); ?>">ファンダイビング</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab3', home_url('/information/'))); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="site-map__heading">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="site-map__items-wrapper--right">
            <ul class="site-map__items site-map__items--right01">
              <li class="site-map__item">
                <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="site-map__heading">お客様の声</a>
              </li>
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/price/')); ?>" class="site-map__heading">料金一覧</a>
                <ul class="site-map__sub-items">
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#license')); ?>">ライセンス講習</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#trial')); ?>">体験ダイビング</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#fun')); ?>">ファンダイビング</a>
                  </li>
                  <li class="site-map__sub-item">
                    <a href="<?php echo esc_url(home_url('/price/#special')); ?>">スペシャル<br class="u-mobile">ダイビング</a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="site-map__items site-map__items--right02">
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="site-map__heading">よくある質問</a>
              </li>
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>" class="site-map__heading">プライバシーポリシー</a>
              </li>
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>" class="site-map__heading">利用規約</a>
              </li>
              <li class="site-map__item">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="site-map__heading site-map__heading--contact">お問い合わせ</a>
              </li>
              <li class="site-map__item">
                <a href="#top" class="site-map__heading site-map__heading--contact">サイトマップ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
