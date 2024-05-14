<!-- site-map サイトマップ -->
<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            Site MAP
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-site-map__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-site-map__fv-sp.jpg" alt="海中のサンゴの画像">
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
                    <a href="https://www.naoko-test.site/codeups-diving/campaign/" class="site-map__heading">キャンペーン</a>
                    <ul class="site-map__sub-items">
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/campaign/?category=license-training">ライセンス講習</a>
                      </li>
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/campaign/?category=fun-diving">ファンダイビング</a>
                      </li>
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/campaign/?category=trial-diving">体験ダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/about-us/" class="site-map__heading">私たちについて</a>
                  </li>
                </ul>
                <ul class="site-map__items site-map__items--left02">
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/information/" class="site-map__heading">ダイビング情報</a>
                    <ul class="site-map__sub-items">
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/information/?tab=tab1">ライセンス講習</a>
                      </li>
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/information/?tab=tab2">ファンダイビング</a>
                      </li>
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/information/?tab=tab3">体験ダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/blog/" class="site-map__heading">ブログ</a>
                  </li>
                </ul>
              </div>
              <div class="site-map__items-wrapper--right">
                <ul class="site-map__items site-map__items--right01">
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/voice/" class="site-map__heading">お客様の声</a>
                  </li>
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/price/" class="site-map__heading">料金一覧</a>
                    <ul class="site-map__sub-items">
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/price/#license">ライセンス講習</a>
                      </li>
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/price/#trial">体験ダイビング</a>
                      </li>
                      <li class="site-map__sub-item">
                      <a href="https://www.naoko-test.site/codeups-diving/price/#fun">ファンダイビング</a>
                      </li>
                      <li class="site-map__sub-item">
                        <a href="https://www.naoko-test.site/codeups-diving/price/#special">スペシャル<br class="u-mobile">ダイビング</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                <ul class="site-map__items site-map__items--right02">
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/faq/" class="site-map__heading">よくある質問</a>
                  </li>
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/privacy-policy/" class="site-map__heading">プライバシー<br class="xl">ポリシー</a>
                  </li>
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/terms/" class="site-map__heading">利用規約</a>
                  </li>
                  <li class="site-map__item">
                    <a href="https://www.naoko-test.site/codeups-diving/contact/" class="site-map__heading site-map__heading--contact">お問い合わせ</a>
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