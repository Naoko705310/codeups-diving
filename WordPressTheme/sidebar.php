<!-- 下層ページのサイドバー（該当ページに、get_sidebar();を使って読み込む。 -->

<!-- aside サイドバー-->
  <div class="sub-aside__inner inner">
    <!-- 人気記事（ブログ） -->
    <div class="sub-aside__contents-wrapper">
  <div class="sub-aside__index">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog__icon-whale.png" alt="クジラのアイコン画像">
    <h2 class="sub-aside__title">人気記事</h2>
  </div>
  <?php
  // 人気記事を取得するカスタムクエリ
  $popular_posts_args = array(
      'post_type' => 'post', // 投稿タイプ
      'posts_per_page' => 3, // 取得する投稿数
      'meta_key' => 'post_views_count', // アクセス数を保存しているカスタムフィールド
      'orderby' => 'meta_value_num', // 数値としてソート
      'order' => 'DESC' // 降順
  );
  $popular_posts_query = new WP_Query($popular_posts_args);

  if ($popular_posts_query->have_posts()) : ?>
    <ul class="popular-posts-list">
      <?php while ($popular_posts_query->have_posts()) : $popular_posts_query->the_post(); ?>
        <li class="popular-post">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>
            <div class="popular-post-details">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
              <span><?php the_title(); ?></span>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p>人気の記事はありません。</p>
  <?php endif; ?>
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
          <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button">
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
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="aside-campaign-card">
                  <figure class="aside-campaign-card__image">
                      <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                      <?php endif; ?>
                  </figure>
                  <div class="aside-campaign-card__body">
                    <!-- プラン名 -->
                      <h3 class="aside-campaign-card__title">
                          <?php the_title(); ?>
                      </h3>
                      <div class="aside-campaign-card__plan">
                          <p class="aside-campaign-card__text">
                              <?php the_field('description'); // カスタムフィールド ?>
                          </p>
                          <p class="page-campaign-card__text">
                          <!-- 全部コミコミ（お一人様） -->
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
        </ul>
        <!-- ボタン -->
        <div class="sub-aside__button">
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button">
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
        <!-- ※月別の記事一覧は、date.phpで表示させる -->
        <ul class="archive__items">
          <?php
          global $wpdb;
          $months_jp = ['01' => '1月', '02' => '2月', '03' => '3月', '04' => '4月', '05' => '5月', '06' => '6月', '07' => '7月', '08' => '8月', '09' => '9月', '10' => '10月', '11' => '11月', '12' => '12月'];
          $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
          foreach ($years as $year) {
            echo '<li class="archive__item"><p class="archive__year js-toggle-year"><span></span>' . $year . '</p><ul class="archive__month-list">';
            $months = $wpdb->get_results("SELECT DISTINCT MONTH(post_date) as month, count(ID) as posts FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '{$year}' GROUP BY month ORDER BY month DESC", OBJECT);
            foreach ($months as $month) {
              $month_num = str_pad($month->month, 2, '0', STR_PAD_LEFT); // 月を2桁の文字列に整形
              $link = get_month_link($year, $month_num); // 年と月からアーカイブページへのリンクを取得
              echo '<li class="archive__month"><a href="' . $link . '"><span></span>' . $months_jp[$month_num] . ' (' . $month->posts . ')</a></li>';
            }
            echo '</ul></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
