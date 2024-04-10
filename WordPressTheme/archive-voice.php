<!-- voice お客様の声 -->
<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            voice
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice__fv-sp.jpg" alt="海に浮かぶダイバーたちの画像">
          </picture>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      <!-- 下層 コンテンツ -->
      <div class="page-voice page-layout">
        <div class="page-voice__inner inner">
          <!-- カテゴリータブ -->
          <div class="page-voice__contents">
            <div class="page-voice__category-tab category-tab">
              <ul class="category-tab__items">
                <li class="category-tab__item category-tab__item--current uppercase">
                  <a href="#">
                    all
                  </a>
                </li>
                <li class="category-tab__item">
                  <a href="#">
                    ライセンス講習
                  </a>
                </li>
                <li class="category-tab__item">
                  <a href="#">
                    ファンダイビング
                  </a>
                </li>
                <li class="category-tab__item">
                  <a href="#">
                    体験ダイビング
                  </a>
                </li>
              </ul>
            </div>
            <!-- ボイスカード群 -->
            <div class="page-voice__items voice-cards">
              <?php if (have_posts()): while (have_posts()): the_post(); ?>
              <!-- ループ処理開始 -->
              <a href="#" class="voice-cards__item voice-card">
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
                    <?php the_title(); ?>
                    </h3>
                  </div>
                <!-- アイキャッチ画像 -->
                <figure>
                    <?php if (get_the_post_thumbnail()) : ?>
                      <!-- もし画像があったらこれを表示 -->
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <!-- そうでなければ（無かったら）これを表示 -->
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="">
                    <?php endif; ?>
                  </figure>
                </div>
                <?php the_content(); ?>
              </a>
              <!-- ループ終了 -->
              <?php endwhile; endif; ?>

            </div>
            <!-- pagination -->
            <div class="page-blog__pagination sub-pagination">
              <?php wp_pagenavi(); ?>
            </div>
            <!-- pagination -->
            <!-- <div class="page-voice__pagination sub-pagination">
              <a href="#" class="page-link__prev"></a>
              <a href="#" class="sub-pagination--current">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#" class="sub-pagination--pc">5</a>
              <a href="#" class="sub-pagination--pc">6</a>
              <a href="#" class="page-link__next"></a>
            </div> -->
          </div>
        </div>
      </div>

<?php get_footer(); ?>