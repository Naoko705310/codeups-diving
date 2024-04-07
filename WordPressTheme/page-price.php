<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            price
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__fv-sp.jpg" alt="海面から覗くダイバーの頭の画像">
          </picture>
        </div>
      </section>
      <!-- パンくずリスト -->
      <div class=" breadcrumb">
        <div class="breadcrumb__inner inner">
          <div class="breadcrumb__text-wrapper">
            <p class="breadcrumb__text">
              <a href="index.html">
                top
              </a>
              <span>料金一覧</span>
            </p>
          </div>
        </div>
      </div>
      <!-- 下層 コンテンツ -->
      <div class="page-price page-layout">
        <div class="page-price__inner inner">
          <!-- priceリスト -->
          <div class="page-price__price-list page-price-list">
            <ul class="page-price-list__items">
              <li id="priceLicense" class="page-price-list__item">
                <div class="page-price-list__heading">
                  <h2 class="page-price-list__title">
                    ライセンス講習
                    </h2>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__icon-whale.png" alt="クジラのアイコン画像">
                </div>
                <dl class="page-price-list__body">
                  <dt>
                    オープンウォーター<br class="u-mobile">ダイバーコース
                  </dt>
                  <dd>
                    ¥50,000
                  </dd>
                  <dt>
                    アドバンスド<br class="u-mobile">オープンウォーターコース
                  </dt>
                  <dd>
                    ¥60,000
                  </dd>
                  <dt>
                    レスキュー＋EFRコース
                  </dt>
                  <dd>
                    ¥70,000
                  </dd>
                </dl>
              </li>
              <li class="page-price-list__item">
                <div class="page-price-list__heading">
                  <h2 class="page-price-list__title">
                    体験ダイビング
                    </h2>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__icon-whale.png" alt="クジラのアイコン画像">
                </div>
                <dl class="page-price-list__body">
                  <dt>
                    ビーチ体験ダイビング<br class="u-mobile">(半日)
                  </dt>
                  <dd>
                    ¥7,000
                  </dd>
                  <dt>
                    ビーチ体験ダイビング<br class="u-mobile">(1日)
                  </dt>
                  <dd>
                    ¥14,000
                  </dd>
                  <dt>
                    ボート体験ダイビング<br class="u-mobile">(半日)
                  </dt>
                  <dd>
                    ¥10,000
                  </dd>
                  <dt>
                    ボート体験ダイビング<br class="u-mobile">(1日)
                  </dt>
                  <dd>
                    ¥18,000
                  </dd>
                </dl>
              </li>
              <li class="page-price-list__item">
                <div class="page-price-list__heading">
                  <h2 class="page-price-list__title">
                    ファンダイビング
                    </h2>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__icon-whale.png" alt="クジラのアイコン画像">
                </div>
                <dl class="page-price-list__body">
                  <dt>
                    ビーチダイビング<br class="u-mobile">(2ダイブ)
                  </dt>
                  <dd>
                    ¥14,000
                  </dd>
                  <dt>
                    ボートダイビング<br class="u-mobile">(2ダイブ)
                  </dt>
                  <dd>
                    ¥18,000
                  </dd>
                  <dt>
                    スペシャルダイビング<br class="u-mobile">(2ダイブ)
                  </dt>
                  <dd>
                    ¥24,000
                  </dd>
                  <dt>
                    ナイトダイビング<br class="u-mobile">(1ダイブ)
                  </dt>
                  <dd>
                    ¥10,000
                  </dd>
                </dl>
              </li>
              <li class="page-price-list__item">
                <div class="page-price-list__heading">
                  <h2 class="page-price-list__title">
                    スペシャルダイビング
                    </h2>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__icon-whale.png" alt="クジラのアイコン画像">
                </div>
                <dl class="page-price-list__body">
                  <dt>
                    貸切ダイビング<br class="u-mobile">(2ダイブ)
                  </dt>
                  <dd>
                    ¥24,000
                  </dd>
                  <dt>
                    1日ダイビング<br class="u-mobile">(3ダイブ)
                  </dt>
                  <dd>
                    ¥32,000
                  </dd>
                  <dt>
                    ナイトダイビング<br class="u-mobile">(2ダイブ)
                  </dt>
                  <dd>
                    ¥14,000
                  </dd>
                </dl>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>