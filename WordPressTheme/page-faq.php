<!-- faq よくある質問 -->
<?php get_header(); ?>

<main>
    <!-- 下層 FV -->
    <section class="sub-fv">
        <div class="sub-fv__inner">
            <h1 class="sub-fv__heading sub-fv__heading--faq">
                FAQ
            </h1>
            <picture class="sub-fv__image">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-faq__fv-pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-faq__fv-sp.jpg" alt="砂浜の画像">
            </picture>
        </div>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- 下層 コンテンツ -->
    <div class="page-faq page-layout">
      <div class="page-faq__inner inner">
          <!-- FAQアコーディオン -->
          <div class="page-faq__accordion accordion">
              <ul class="accordion__items">
                  <?php
                  // 固定ページのスラッグが 'faq' のページIDを取得
                  $faq_page = get_page_by_path('faq');
                  $page_id = $faq_page->ID;

                  // カスタムフィールドの値を取得
                  $faqs = SCF::get('faq', $page_id); // 'faq'はSmart Custom Fieldsで設定したグループキー

                  foreach ($faqs as $faq) {
                      $question = esc_html($faq['question']); // 'question'は質問のフィールドキー
                      $answer = esc_html($faq['answer']); // 'answer'は回答のフィールドキー
                      ?>
                      <li class="accordion__item">
                          <h2 class="accordion__title js-accordion__title"><?php echo $question; ?></h2>
                          <div class="accordion__content">
                              <p class="accordion__text"><?php echo $answer; ?></p>
                          </div>
                      </li>
                      <?php
                  }
                  ?>
              </ul>
          </div>
      </div>
    </div>

<?php get_footer(); ?>
