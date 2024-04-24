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
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  </p>
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
                <?php for ($i = 1; $i <= 6; $i++): // 6枚の画像があると仮定 ?>
                  <?php $image = get_field('gallery_image' . $i); ?>
                  <?php if ($image): // 画像がある場合 ?>
                    <!-- <pre><?php var_dump($image); ?></pre> この行を追加 -->
                    <li class="gallery__item">
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </li>
                    <?php else: ?>
                    <p>画像<?php echo $i; ?>はありません。</p> <!-- この行を追加 -->
                  <?php endif; ?>
                <?php endfor; ?>
                <!-- <li class="gallery__item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__gallery01.jpg" alt="海中の、色とりどりの魚の画像">
                </li>
                <li class="gallery__item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__gallery02.jpg" alt="海に浮かぶボートの画像">
                </li>
                <li class="gallery__item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__gallery03.jpg" alt="海中の、二匹の黄色い魚の画像">
                </li>
                <li class="gallery__item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__gallery04.jpg" alt="海中の、一匹の黄色い魚の画像">
                </li>
                <li class="gallery__item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__gallery05.jpg" alt="海中の、小魚の群れの画像">
                </li>
                <li class="gallery__item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-about-us__gallery06.jpg" alt="サンゴと黄色い魚の画像">
                </li> -->
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