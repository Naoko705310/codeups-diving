<!-- contact お問い合わせ -->
<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            contact
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact__fv-sp.jpg" alt="波打ち際の画像">
          </picture>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      <!-- 下層 コンテンツ -->
      <div class="page-contact page-layout">
        <div class="page-contact__inner inner">
          <div class="page-contact__contents-wrapper">
            <!-- お問い合わせフォーム -->
            <div class="contact-form__error">
              <span id="js-error-message" class="error-message">
                ※必須項目が入力されていません。入力してください。
              </span>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="49ed2b5" title="お問い合わせ"]'); ?>
            
            <!-- お問い合わせフォームここまで -->
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>