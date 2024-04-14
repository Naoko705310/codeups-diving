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
                <a href="?category=all" data-tag="all">
                    all
                  </a>
                </li>
                <li class="category-tab__item">
                <a href="?category=license-training" data-tag="license">
                    ライセンス講習
                  </a>
                </li>
                <li class="category-tab__item">
                <a href="?category=fun-diving" data-tag="fun">
                    ファンダイビング
                  </a>
                </li>
                <li class="category-tab__item">
                <a href="?category=trial-diving" data-tag="experience">
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
                        <?php 
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            // 複数のカテゴリーがある場合は、最初のものを表示
                            echo esc_html($terms[0]->name);
                        } else {
                            // カテゴリーが割り当てられていない場合のデフォルトテキスト
                            echo 'カテゴリーなし';
                        }
                        ?>
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
                <div class="voice-card__body">
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
        </div>
      </div>

<?php get_footer(); ?>