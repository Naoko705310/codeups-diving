<!-- blog-details ブログ詳細 -->
<?php get_header(); ?>

<main>
  <!-- 下層 FV -->
  <section class="sub-fv">
    <div class="sub-fv__inner">
      <h2 class="sub-fv__heading">
        blog
      </h2>
      <picture class="sub-fv__image">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__fv-pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__fv-sp.jpg" alt="小魚の大群の画像">
      </picture>
    </div>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>


  <!-- 下層 コンテンツ -->
  <div class="page-blog-details page-layout">
    <div class="page-blog-details__inner inner">
      <!-- main -->
      <div class="page-blog-details__contents-wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- ループ処理開始 -->
            <div class="page-blog-details__main">
              <article class="blog-article">
                <div class="blog-article__body">
                  <time class="blog-article__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <h3 class="blog-article__heading">
                    <?php the_title(); ?>
                  </h3>

                  <figure>
                    <?php if (get_the_post_thumbnail()) : ?>
                      <!-- もし画像があったらこれを表示 -->
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <!-- そうでなければ（無かったら）これを表示 -->
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="">
                    <?php endif; ?>
                  </figure>
                  <!-- 記事の中身 -->
                  <?php the_content(); ?>

                  <figure>
                    <?php if (get_the_post_thumbnail()) : ?>
                      <!-- もし画像があったらこれを表示 -->
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <!-- そうでなければ（無かったら）これを表示 -->
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="">
                    <?php endif; ?>
                  </figure>
                  <!-- 記事の中身 -->
                  <?php the_content(); ?>
                  <ul>
                    <li>
                      リスト１
                    </li>
                    <li>
                      リスト2
                    </li>
                    <li>
                      リスト3
                    </li>
                  </ul>
                  <?php the_content(); ?>
                  <!-- 前の記事・次の記事 flex-->
                  <div class="blog-article__pagination sub-pagination sub-pagination--blog-article">
                    <!-- 前の記事を取得 -->
                    <?php
                    $prev = get_previous_post();
                    $prev_url = !empty($prev) ? esc_url(get_permalink($prev->ID)) : '';
                    $next = get_next_post();
                    $next_url = !empty($next) ? esc_url(get_permalink($next->ID)) : '';
                    ?>
                      <!-- 前の記事が存在すればリンクする -->
                      <?php if(!empty($prev)): ?>
                      <a href="<?php echo $prev_url; ?>" class="page-link__prev"></a>
                      <?php endif; ?>
                      <!-- 次の記事が存在すればリンクする -->
                      <?php if(!empty($next)): ?>
                      <a href="<?php echo $next_url; ?>" class="page-link__next"></a>
                      <?php endif; ?>
                  </div>
                </div>
              </article>
            </div>
            <!-- ループ終了 -->
        <?php endwhile;
        endif; ?>


        <!-- aside -->
        <aside class="page-blog-details__aside sub-aside ">
          <div class="sub-aside__inner inner">
            <div class="sub-aside__contents-wrapper">
              <div class="sub-aside__index">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                <h2 class="sub-aside__title">
                  人気記事
                </h2>
              </div>
              <div class="sub-aside__popular-articles popular-articles">
                <ul class="popular-articles__items popular-articles-cards">
                  <li class="popular-articles__item">
                    <a class="popular-articles-card" href="blog-details.html">
                      <figure class="popular-articles-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__image04.jpg" alt="一匹の黄色い魚の画像">
                      </figure>
                      <div class="popular-articles-card__body">
                        <time class="popular-articles-card__time" datetime="2023-11-17">2023.11/17</time>
                        <h3 class="popular-articles-card__title">
                          ライセンス取得
                        </h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular-articles__item">
                    <a class="popular-articles-card" href="blog-details.html">
                      <figure class="popular-articles-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__image02.jpg" alt="ウミガメの画像">
                      </figure>
                      <div class="popular-articles-card__body">
                        <time class="popular-articles-card__time" datetime="2023-11-17">2023.11/17</time>
                        <h3 class="popular-articles-card__title">
                          ウミガメと泳ぐ
                        </h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular-articles__item">
                    <a class="popular-articles-card" href="blog-details.html">
                      <figure class="popular-articles-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__image03.jpg" alt="サンゴとクマノミの画像">
                      </figure>
                      <div class="popular-articles-card__body">
                        <time class="popular-articles-card__time" datetime="2023-11-17">2023.11/17</time>
                        <h3 class="popular-articles-card__title">
                          カクレクマノミ
                        </h3>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="sub-aside__contents-wrapper">
              <div class="sub-aside__index">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                <h2 class="sub-aside__title">
                  口コミ
                </h2>
              </div>
              <div class="sub-aside__wom wom">
                <div class="wom__card wom-card">
                  <figure class="wom-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__image-wom.jpg" alt="夫婦の画像">
                  </figure>
                  <div class="wom-card__body">
                    <p class="wom-card__age">
                      30代(カップル)
                    </p>
                    <h3 class="wom-card__title">
                      ここにタイトルが入ります。ここにタイトル
                    </h3>
                  </div>
                </div>
                <!-- ボタン -->
                <div class="sub-aside__button">
                  <a href="voice.html" class="button">
                    <span>view more</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="sub-aside__contents-wrapper">
              <div class="sub-aside__index">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                <h2 class="sub-aside__title">
                  キャンペーン
                </h2>
              </div>
              <div class="sub-aside__campaign sub-campaign">
                <ul class="sub-campaign__items aside-campaign-cards">
                  <li class="sub-campaign__item aside-campaign-card">
                    <a href="campaign.html" class="aside-campaign-card">
                      <figure class="aside-campaign-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-01.jpg" alt="海中の、色とりどりの魚の画像">
                      </figure>
                      <div class="aside-campaign-card__body">
                        <h3 class="aside-campaign-card__title">
                          ライセンス取得
                        </h3>
                        <div class="aside-campaign-card__plan">
                          <p class="aside-campaign-card__text">
                            全部コミコミ(お一人様)
                          </p>
                          <div class="aside-campaign-card__price-wrapper">
                            <p class="aside-campaign-card__old-price">
                              ¥56,000
                            </p>
                            <p class="aside-campaign-card__new-price">
                              ¥46,000
                            </p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="sub-campaign__item aside-campaign-card">
                    <a href="campaign.html" class="aside-campaign-card">
                      <figure class="aside-campaign-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-02.jpg" alt="砂浜に浮かぶ船の画像">
                      </figure>
                      <div class="aside-campaign-card__body">
                        <h3 class="aside-campaign-card__title">
                          貸切体験ダイビング
                        </h3>
                        <div class="aside-campaign-card__plan">
                          <p class="aside-campaign-card__text">
                            全部コミコミ(お一人様)
                          </p>
                          <div class="aside-campaign-card__price-wrapper">
                            <p class="aside-campaign-card__old-price">
                              ¥24,000
                            </p>
                            <p class="aside-campaign-card__new-price">
                              ¥18,000
                            </p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- ボタン -->
                <div class="sub-aside__button">
                  <a href="campaign.html" class="button">
                    <span>view more</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="sub-aside__contents-wrapper">
              <div class="sub-aside__index">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                <h2 class="sub-aside__title">
                  アーカイブ
                </h2>
              </div>
              <div class="sub-aside__archive archive">
                <ul class="archive__items">
                  <li class="archive__item">
                    <p class="archive__year is-active">
                      <span></span>
                      2023
                    </p>
                    <ul class="archive__month-list">
                      <li class="archive__month">
                        <a href="#">
                          <span></span>
                          3月
                        </a>
                      </li>
                      <li class="archive__month">
                        <a href="#">
                          <span></span>
                          2月
                        </a>
                      </li>
                      <li class="archive__month">
                        <a href="#">
                          <span></span>
                          1月
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="archive__item">
                    <p class="archive__year">
                      <span></span>
                      2022
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>