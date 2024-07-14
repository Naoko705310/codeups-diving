<!-- about-us 私たちについて -->
<?php get_header(); ?>

<main>
      <!-- 下層 FV -->
      <section class="sub-fv">
        <div class="sub-fv__inner">
          <h2 class="sub-fv__heading">
            about <span>us</span>
          </h2>
          <picture class="sub-fv__image">
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__fv-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__fv-sp.jpg" alt="シーサーの画像">
          </picture>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      <!-- 下層about-us コンテンツ -->
      <section class="page-about-us page-layout">
        <div class="page-about-us__inner inner">
          <!-- メインメッセージ -->
          <div class="page-about-us__contents-wrapper">
            <div class="page-about-us__image-wrapper">
              <figure class="about-us__image-left">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-01.jpg" alt="シーサーの画像" class="u-desktop">
              </figure>
              <figure class="about-us__image-right page-about-us__image-right">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-02.jpg" alt="黄色い魚の画像">
              </figure>
              <div class="about-us__body">
                <h2 class="about-us__main-copy page-about-us__main-copy">
                  Dive into<br>
                  the Ocean
                </h2>
                <div class="about-us__text-wrapper">
                  <p class="about-us__text">
                    <?php echo nl2br(get_field('about-us_main-copy')); ?>
                  </p>
                  <!-- ボタン -->
                  <div class="about-us__button">
                    <a href="<?php echo get_permalink(get_page_by_path('about-us')->ID); ?>" class="button">
                      <span>view more</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ギャラリー -->
          <div class="page-about-us__gallery gallery">
            <div class="gallery__section-title section-title section-title--gallery">
              <span class="section-title__en section-title__en--gallery indent">
                gallery
              </span>
              <h2 class="section-title__jp">
                フォト
              </h2>
            </div>
            <div class="gallery__image-wrapper">
              <ul class="gallery__items">
                <?php 
                $i = 1;
                while ($image = get_field('gallery_image' . $i)) { // 画像が存在するかチェック
                  if ($image): // 画像がある場合
                    ?>
                    <li class="gallery__item">
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </li>
                    <?php
                  endif;
                  $i++;
                }
                ?>
              </ul>
            </div>
          </div>
          <!-- モーダル -->
          <div class="gallery__modal modal js-modal">
            <div class="modal__background">
              <figure class="modal__image-wrapper">
                <img src="" alt="モーダルの画像">
              </figure>
            </div>
          </div>
        </div><!-- page-about-us__inner -->
      </section><!-- page-about-us -->


<?php get_footer(); ?>