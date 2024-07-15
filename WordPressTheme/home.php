<!-- blog ブログ一覧 -->
<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h1 class="sub-fv__heading">
            blog
          </h1>
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
                      <h3 class="blog-card__heading"><?php the_title(); ?></h3>
                      <p class="blog-card__text clamp-text">
                        <?php echo get_the_excerpt(); ?>
                      </p>
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
              <?php get_sidebar(); ?>
            </aside>
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>