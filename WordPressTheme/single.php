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
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
                // ここで閲覧数をカウントする関数を呼び出す
                track_post_views(get_the_ID());
        ?>
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
        <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </div>


  <?php get_footer(); ?>