<!-- TOP トップページ -->
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
            <!-- top-fvスライダー -->
            <div class="swiper top-fv__swiper js-top-fv-swiper">
              <div class="swiper-wrapper">
                <?php 
                for ($i = 1; $i <= 4; $i++) {
                    $image_field_name = 'fv_image_0' . $i; // フィールド名を生成
                    $image = get_field($image_field_name); // ACFから画像を取得
                    if ($image): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    <?php endif;
                }
                ?>
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
              <!-- functions.phpで定義したcampaignの共通関数を呼び出す -->
              <?php
              $campaigns = get_campaign_posts();
              if ($campaigns->have_posts()) :
                  while ($campaigns->have_posts()) : $campaigns->the_post();
                      ?>
              <div class="swiper-slide">
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="campaign-card">
                  <figure class="campaign-card__image">
                      <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                      <?php endif; ?>
                  </figure>
                  <div class="campaign-card__body">
                    <p class="campaign-card__tag category-tag">
                        <?php $terms = get_the_terms(get_the_ID(), 'campaign_category');
                        if (!empty($terms) && !is_wp_error($terms)) {
                            echo esc_html($terms[0]->name);
                        } ?>
                    </p>
                    <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                    <div class="campaign-card__plan">
                      <p class="campaign-card__text"><?php the_field('campaign-price_title'); ?></p>
                      <div class="campaign-card__price-wrapper">
                        <p class="campaign-card__old-price">¥<?php the_field('price_previous'); ?></p>
                        <p class="campaign-card__new-price">¥<?php the_field('price_new'); ?></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile;wp_reset_postdata();endif;?>
            </div>
          </div>
        </div>
        <!-- Campaignセクションのボタン -->
        <div class="campaign__button">
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button">
            <span>view more</span>
          </a>
        </div>
      </div>
    </section>
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
              <?php echo nl2br(get_field('about-us_main-copy')); ?>
            </p>
            <!-- ボタン -->
            <div class="about-us__button">
              <a href="<?php echo get_permalink(9); ?>" class="button">
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
              <a href="<?php echo get_permalink(12); ?>" class="button">
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
        <!-- WP_Query を使用してデータを取得 -->
        <?php
        // 最新のブログ投稿を取得するクエリ
        $args = array(
            'post_type' => 'post', // 投稿タイプ
            'posts_per_page' => 3, // 表示する投稿数
            'orderby' => 'date', // 日付で並び替え
            'order' => 'DESC' // 降順
        );
        $blog_posts = new WP_Query($args);
        ?>
        <!-- ブログカード群 -->
        <div class="blog__items blog-cards">
            <?php if ($blog_posts->have_posts()) : ?>
                <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
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
                      <p class="blog-card__text">
                        <?php echo get_the_excerpt(); ?>
                      </p>
                  </div>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
        <!-- ボタン -->
        <div class="blog__button">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="button">
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
          <?php
          $voice_args = array(
            'post_type' => 'voice', // カスタム投稿タイプのスラッグ
            'posts_per_page' => 2 // 表示する投稿数
          );
          $voice_query = new WP_Query($voice_args);
          if ($voice_query->have_posts()) :
            while ($voice_query->have_posts()) : $voice_query->the_post();
              ?>
              <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="voice-cards__item voice-card">
                <div class="voice-card__header-wrapper">
                  <div class="voice-card__header">
                    <div class="voice-card__information">
                      <p class="voice-card__age">
                        <?php the_field('age'); ?> <!-- 年齢や性別などのフィールド -->
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
                  <figure class="voice-card__image colorbox">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                  </figure>
                </div>
                <p class="voice-card__text">
                  <?php echo get_the_excerpt(); ?>
                </p>
              </a>
              <?php
            endwhile;
            wp_reset_postdata();
          else :
            echo '<p>No voices found.</p>';
          endif;
          ?>
        </div>
        <!-- ボタン -->
        <div class="voice__button">
          <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button">
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
              <?php
              // page-price.phpのページIDを指定
              $page_id = 14; // ここにpage-price.phpが割り当てられているページのIDを設定

              // 各セクションのカスタムフィールドから情報を取得し表示
              $sections = [
                  'license' => 'ダイビング講習',
                  'trial' => '体験ダイビング',
                  'fun' => 'ファンダイビング',
                  'special' => 'スペシャルダイビング',
              ];

              foreach ($sections as $key => $title) {
                  // 第二引数にページIDを指定してカスタムフィールドの値を取得
                  $courses = SCF::get($key, $page_id);
                  if (!empty($courses)) {
                      echo "<dt class='top-price-list__heading'>{$title}</dt>";
                      foreach ($courses as $course) {
                          $course_name = esc_html($course["{$key}_course_name"]);
                          $price = esc_html($course["{$key}_price"]);
                          echo "<dd class='top-price-list__text'>";
                          echo "<p class='top-price-list__plan'>{$course_name}</p>";
                          echo "<p class='top-price-list__price'>¥{$price}</p>";
                          echo "</dd>";
                      }
                  }
              }
              ?>
            </dl>
          </div><!-- /.price__price-list top-price-list -->
        </div>
        <!-- ボタン -->
        <div class="price__button">
          <a href="<?php echo get_permalink(14); ?>" class="button"> <!-- ここで14はpage-price.phpのページID -->
            <span>view more</span>
          </a>
        </div>
      </div><!-- /.price__inner -->
    </section><!-- /.price -->


  <?php get_footer(); ?>
