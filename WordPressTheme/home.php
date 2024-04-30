<!-- blog ブログ一覧 -->
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
      <div class="page-blog page-layout">
        <div class="page-blog__inner inner">
          <div class="page-blog__contents-wrapper">
            <div class="page-blog__main blog-articles">
              <!-- ブログカード群 -->
              <div class="blog-articles__items blog-cards blog-cards--page-blog">
                <!-- ループ処理開始 -->
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <!-- ブログカード -->
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                  <figure class="blog-card__image">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-card-01.jpg" alt="デフォルト画像">
                    <?php endif; ?>
                  </figure>
                  <div class="blog-card__body">
                    <time class="blog-card__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <h3 class="blog-card__heading">
                      <?php the_title(); ?>
                    </h3>
                    <?php the_content(); ?>
                  </div>
                </a>
                <!-- ループ終了 -->
                <?php endwhile; endif; ?>
              </div>
              <!-- pagination -->
              <div class="page-blog__pagination sub-pagination">
                <?php wp_pagenavi(); ?>
              </div>
            </div>
            <!-- aside サイドバー-->
            <aside class="page-blog__aside sub-aside ">



              <div class="sub-aside__inner inner">
                <!-- 人気記事（ブログ） -->
                <div class="sub-aside__contents-wrapper">
                  <div class="sub-aside__index">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                    <h2 class="sub-aside__title">
                      人気記事
                    </h2>
                  </div>
                  <div class="sub-aside__popular-articles popular-articles">
                  <div class="sub-aside__popular-articles popular-articles">
                  <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'blog_sidebar' ); ?>
            <?php endif; ?>

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
                <!-- 口コミ（お客様の声） -->
                <div class="sub-aside__contents-wrapper">
                  <div class="sub-aside__index">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                    <h2 class="sub-aside__title">
                      口コミ
                    </h2>
                  </div>
                  <div class="sub-aside__wom wom">
                    <!-- archive-voice.phpから記事を取ってきて表示 -->
                    <!-- サイドバー用の口コミカード -->
                    <div class="sidebar-voice-cards">
                        <?php
                        $voice_query = new WP_Query(array(
                            'post_type'      => 'voice', // カスタム投稿タイプ
                            'posts_per_page' => 1        // 最新の1件を取得
                        ));
                        if ($voice_query->have_posts()): while ($voice_query->have_posts()): $voice_query->the_post();
                        ?>
                        <div class="wom__card wom-card">
                            <figure class="wom-card__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__image-wom.jpg" alt="デフォルトの画像">
                                <?php endif; ?>
                            </figure>
                            <div class="wom-card__body">
                            <p class="wom-card__age">
                              <?php echo get_field('age'); ?>
                            </p>
                                <h3 class="wom-card__title">
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                        </div>
                        <?php
                        endwhile; endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <!-- ボタン -->
                    <div class="sub-aside__button">
                      <a href="voice.html" class="button">
                        <span>view more</span>
                      </a>
                    </div>
                  </div> 
                </div>
                <!-- キャンペーン -->
                <div class="sub-aside__contents-wrapper">
                  <div class="sub-aside__index">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
                    <h2 class="sub-aside__title">
                      キャンペーン
                    </h2>
                  </div>
                  <div class="sub-aside__campaign sub-campaign">
                    <ul class="sub-campaign__items aside-campaign-cards">
                    <?php
$campaigns = new WP_Query(array(
    'post_type' => 'campaign', // カスタム投稿タイプ名
    'posts_per_page' => 2     // 表示する投稿数を2に制限
));

if ($campaigns->have_posts()) :
    while ($campaigns->have_posts()) : $campaigns->the_post();
?>
        <li class="sub-campaign__item aside-campaign-card">
            <a href="<?php the_permalink(); ?>" class="aside-campaign-card">
                <figure class="aside-campaign-card__image">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </figure>
                <div class="aside-campaign-card__body">
                    <h3 class="aside-campaign-card__title">
                        <?php the_title(); ?>
                    </h3>
                    <div class="aside-campaign-card__plan">
                        <p class="aside-campaign-card__text">
                            <?php the_field('description'); // カスタムフィールド ?>
                        </p>
                        <p class="page-campaign-card__text">
                        <?php the_field('campaign-price_title'); ?>
                      </p>
                        <div class="aside-campaign-card__price-wrapper">
                            <p class="aside-campaign-card__old-price">
                                ¥<?php echo get_field('price_previous'); // 値を正しく取得するために echo を使用 ?>
                            </p>
                            <p class="aside-campaign-card__new-price">
                                ¥<?php echo get_field('price_new'); // 値を正しく取得するために echo を使用 ?>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </li>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>








                      <!-- <li class="sub-campaign__item aside-campaign-card">
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
                      </li> -->
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