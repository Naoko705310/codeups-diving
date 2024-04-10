<!-- index テンプレートが無ければ、これが表示される -->
<?php get_header(); ?>


  <main>
    <!-- FV セクション-->
    <section id="top-fv" class="top-fv">
      <div class="top-fv__inner">
        <div class="top-fv__heading">
          <h2 class="top-fv__main-copy">
            diving
          </h2>
          <p class="top-fv__sub-copy">
            into the ocean
          </p>
        </div>
        <!-- top-fvスライダー -->
        <div class="swiper top-fv__swiper js-top-fv-swiper">
          <div class="swiper-wrapper">
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-01.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-01.jpg" alt="ウミガメのアップの画像">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-02.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-02.jpg" alt="ウミガメとダイバー二人の画像">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-03.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-03.jpg" alt="海と船の画像">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc-04.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-sp-04.jpg" alt="砂浜の画像">
            </picture>
          </div>
        </div>
      </div><!-- /.top-fv__inner -->
    </section><!-- /.top-fv -->
    <!-- Campaignセクション -->
    <section id="campaign" class="campaign top-campaign">
      <div class="campaign__inner inner">
        <div class="campaign__section-title section-title">
          <span class="section-title__en">
            campaign
          </span>
          <h2 class="section-title__jp">
            キャンペーン
          </h2>
        </div>
        <!-- Campaign スワイパー -->
        <div class="campaign__swiper-container">
          <div class="swiper campaign__swiper js-campaign-swiper">
            <div class="swiper-wrapper campaign__swiper-wrapper">
              <div class="swiper-slide campaign__swiper-slide">
                <a href="campaign.html" class="campaign-card">
                  <figure class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-01.jpg" alt="海中の、色とりどりの魚の画像">
                  </figure>
                  <div class="campaign-card__body">
                    <p class="campaign-card__tag category-tag">
                      ライセンス講習
                    </p>
                    <h3 class="campaign-card__title">
                      ライセンス取得
                    </h3>
                    <div class="campaign-card__plan">
                      <p class="campaign-card__text">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price-wrapper">
                        <p class="campaign-card__old-price">
                          ¥56,000
                        </p>
                        <p class="campaign-card__new-price">
                          ¥46,000
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- /.swiper-slide campaign__swiper-slide -->
              <!-- スライド02 -->
              <div class="swiper-slide campaign__swiper-slide">
                <a href="campaign.html" class="campaign-card">
                  <figure class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-02.jpg" alt="砂浜に浮かぶ船の画像">
                  </figure>
                  <div class="campaign-card__body">
                    <p class="campaign-card__tag category-tag">
                      体験ダイビング
                    </p>
                    <h3 class="campaign-card__title">
                      貸切体験ダイビング
                    </h3>
                    <div class="campaign-card__plan">
                      <p class="campaign-card__text">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price-wrapper">
                        <p class="campaign-card__old-price">
                          ¥24,000
                        </p>
                        <p class="campaign-card__new-price">
                          ¥18,000
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- /.swiper-slide campaign__swiper-slide -->
              <!-- スライド03 -->
              <div class="swiper-slide campaign__swiper-slide">
                <a href="campaign.html" class="campaign-card">
                  <figure class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-03.jpg" alt="海中のクラゲの画像">
                  </figure>
                  <div class="campaign-card__body">
                    <p class="campaign-card__tag category-tag">
                      体験ダイビング
                    </p>
                    <h3 class="campaign-card__title">
                      ナイトダイビング
                    </h3>
                    <div class="campaign-card__plan">
                      <p class="campaign-card__text">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price-wrapper">
                        <p class="campaign-card__old-price">
                          ¥10,000
                        </p>
                        <p class="campaign-card__new-price">
                          ¥8,000
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- /.swiper-slide campaign__swiper-slide -->
              <!-- スライド04 -->
              <div class="swiper-slide campaign__swiper-slide">
                <a href="campaign.html" class="campaign-card">
                  <figure class="campaign-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-04.jpg" alt="海中のダイバーたちの画像">
                  </figure>
                  <div class="campaign-card__body">
                    <p class="campaign-card__tag category-tag">
                      ファンダイビング
                    </p>
                    <h3 class="campaign-card__title">
                      貸切ファンダイビング
                    </h3>
                    <div class="campaign-card__plan">
                      <p class="campaign-card__text">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="campaign-card__price-wrapper">
                        <p class="campaign-card__old-price">
                          ¥20,000
                        </p>
                        <p class="campaign-card__new-price">
                          ¥16,000
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div> <!-- Campaign__swiper -->
          <!-- 左右矢印 -->
          <div class="campaign__swiper-button-wrapper">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div><!-- /.campaign__swiper-container -->
        <!-- ボタン -->
        <div class="campaign__button">
          <a href="campaign.html" class="button">
            <span>view more</span>
          </a>
        </div>
      </div>
    </section><!-- /campaign.html.campaign -->
    <!-- About Us セクション -->
    <section id="about-us" class="about-us top-about-us">
      <div class="about-us__inner inner">
        <div class="about-us__section-title section-title">
          <span class="section-title__en">
            about us
          </span>
          <h2 class="section-title__jp">
            私たちについて
          </h2>
        </div>
        <div class="about-us__contents-wrapper">
          <div class="about-us__image-wrapper">
            <figure class="about-us__image-left">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-01.jpg" alt="シーサーの画像">
            </figure>
            <figure class="about-us__image-right">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-02.jpg" alt="黄色い魚の画像">
            </figure>
            <div class="about-us__body">
              <h2 class="about-us__main-copy">
                Dive into<br>
                the Ocean
              </h2>
              <div class="about-us__text-wrapper">
                <p class="about-us__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
                <!-- ボタン -->
                <div class="about-us__button">
                  <a href="about-us.html" class="button">
                    <span>view more</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.about-us__inner inner -->
    </section><!-- /.about-us -->
    <!-- Information セクション -->
    <section id="information" class="information top-information">
      <div class="information__inner inner">
        <div class="information__section-title section-title">
          <span class="section-title__en">
            information
          </span>
          <h2 class="section-title__jp">
            ダイビング情報
          </h2>
        </div>
        <div class="information__contents-wrapper">
          <figure class="information__image colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-01.jpg" alt="サンゴと黄色い魚の画像">
          </figure>
          <div class="information__body">
            <h3 class="information__heading">
              ライセンス講習
            </h3>
            <p class="information__text">
              当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
            </p>
            <!-- ボタン -->
            <div class="information__button">
              <a href="information.html" class="button">
                <span>view more</span>
              </a>
            </div>
          </div>
        </div>
      </div><!-- /.information__inner -->
    </section><!-- /.information -->
    <!-- Blog セクション -->
    <section id="blog" class="blog top-blog">
      <div class="blog__inner inner">
        <div class="blog__section-title section-title">
          <span class="section-title__en section-title__en--blog">
            blog
          </span>
          <h2 class="section-title__jp section-title__jp--blog">
            ブログ
          </h2>
        </div>
        <!-- ブログカード群 -->
        <div class="blog__items blog-cards">
          <a href="blog.html" class="blog-cards__item blog-card">
            <figure class="blog-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-card-01.jpg" alt="サンゴの画像">
            </figure>
            <div class="blog-card__body">
              <time class="blog-card__time" datetime="2023-11-17">2023.11.17</time>
              <h3 class="blog-card__heading">
                ライセンス取得
              </h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
          <a href="blog.html" class="blog-cards__item blog-card">
            <figure class="blog-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-card-02.jpg" alt="ウミガメの画像">
            </figure>
            <div class="blog-card__body">
              <time class="blog-card__time" datetime="2023-11-17">2023.11.17</time>
              <h3 class="blog-card__heading">
                ウミガメと泳ぐ
              </h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
          <a href="blog.html" class="blog-cards__item blog-card">
            <figure class="blog-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-card-03.jpg" alt="イソギンチャクの中のクマノミの画像">
            </figure>
            <div class="blog-card__body">
              <time class="blog-card__time" datetime="2023-11-17">2023.11.17</time>
              <h3 class="blog-card__heading">
                カクレクマノミ
              </h3>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </div>
        <!-- ボタン -->
        <div class="blog__button">
          <a href="blog.html" class="button">
            <span>view more</span>
          </a>
        </div>
      </div><!-- /.blog__inner -->
    </section><!-- /.blog -->
    <!-- Voice セクション -->
    <section id="voice" class="voice top-voice">
      <div class="voice__inner inner">
        <div class="voice__section-title section-title">
          <span class="section-title__en">
            voice
          </span>
          <h2 class="section-title__jp">
            お客様の声
          </h2>
        </div>
        <!-- ボイスカード群 -->
        <div class="voice__items voice-cards">
          <a href="voice.html" class="voice-cards__item voice-card">
            <div class="voice-card__header-wrapper">
              <div class="voice-card__header">
                <div class="voice-card__information">
                  <p class="voice-card__age">
                    20代(女性)
                  </p>
                  <p class="voice-card__tag category-tag">
                    ライセンス講習
                  </p>
                </div>
                <h3 class="voice-card__title">
                  ここにタイトルが入ります。ここにタイトル
                </h3>
              </div>
              <figure class="voice-card__image colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-01.jpg" alt="帽子をかぶっている女性の画像">
              </figure>
            </div>
            <p class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </a>
          <a href="voice.html" class="voice-cards__item voice-card">
            <div class="voice-card__header-wrapper">
              <div class="voice-card__header">
                <div class="voice-card__information">
                  <p class="voice-card__age">
                    30代(男性)
                  </p>
                  <p class="voice-card__tag category-tag">
                    ファンダイビング
                  </p>
                </div>
                <h3 class="voice-card__title">
                  ここにタイトルが入ります。ここにタイトル
                </h3>
              </div>
              <figure class="voice-card__image colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-02.jpg" alt="右手でグッドサインをしている男性の画像">
              </figure>
            </div>
            <p class="voice-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
              ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </a>
        </div>
        <!-- ボタン -->
        <div class="voice__button">
          <a href="voice.html" class="button">
            <span>view more</span>
          </a>
        </div>
      </div><!-- /.voice__inner -->
    </section><!-- /.voice -->
    <!-- Price セクション -->
    <section id="price" class="price top-price">
      <div class="price__inner inner">
        <div class="price__section-title section-title">
          <span class="section-title__en">
            price
          </span>
          <h2 class="section-title__jp">
            料金一覧
          </h2>
        </div>
        <div class="price__contents-wrapper">
          <!-- price 画像 -->
          <picture class="price__image colorbox">
            <!-- ↓幅768px以上で表示↓ -->
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg" media="(min-width: 768px)">
            <!-- ↓上記全て表示条件に当てはまらない場合に表示↓ -->
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="ウミガメのアップの画像">
          </picture>
          <!-- price リスト -->
          <div class="price__price-list top-price-list">
            <dl class="top-price-list__items">
              <dt class="top-price-list__heading">
                ライセンス講習
              </dt>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  オープンウォーターダイバーコース
                </p>
                <p class="top-price-list__price">
                  ¥50,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  アドバンスドオープンウォーターコース
                </p>
                <p class="top-price-list__price">
                  ¥60,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  レスキュー＋EFRコース
                </p>
                <p class="top-price-list__price">
                  ¥70,000
                </p>
              </dd>
              <dt class="top-price-list__heading">
                体験ダイビング
              </dt>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ビーチ体験ダイビング(半日)
                </p>
                <p class="top-price-list__price">
                  ¥7,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ビーチ体験ダイビング(1日)
                </p>
                <p class="top-price-list__price">
                  ¥14,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ボート体験ダイビング(半日)
                </p>
                <p class="top-price-list__price">
                  ¥10,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ボート体験ダイビング(1日)
                </p>
                <p class="top-price-list__price">
                  ¥18,000
                </p>
              </dd>
              <dt class="top-price-list__heading">
                ファンダイビング
              </dt>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ビーチダイビング(2ダイブ)
                </p>
                <p class="top-price-list__price">
                  ¥14,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ボートダイビング(2ダイブ)
                </p>
                <p class="top-price-list__price">
                  ¥18,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  スペシャルダイビング(2ダイブ)
                </p>
                <p class="top-price-list__price">
                  ¥24,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  ナイトダイビング(1ダイブ)
                </p>
                <p class="top-price-list__price">
                  ¥10,000
                </p>
              </dd>
              <dt class="top-price-list__heading">
                スペシャルダイビング
              </dt>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  貸切ダイビング(2ダイブ)
                </p>
                <p class="top-price-list__price">
                  ¥24,000
                </p>
              </dd>
              <dd class="top-price-list__text">
                <p class="top-price-list__plan">
                  1日ダイビング(3ダイブ)
                </p>
                <p class="top-price-list__price">
                  ¥32,000
                </p>
              </dd>
            </dl>
          </div><!-- /.price__price-list top-price-list -->
        </div>
        <!-- ボタン -->
        <div class="price__button">
          <a href="price.html" class="button">
            <span>view more</span>
          </a>
        </div>
      </div><!-- /.price__inner -->
    </section><!-- /.price -->


  <?php get_footer(); ?>
