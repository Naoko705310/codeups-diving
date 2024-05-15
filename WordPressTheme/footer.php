      <!-- Contact セクション -->
      <section id="contact" class="contact top-contact">
      <div class="contact__inner inner">
        <div class="contact__contents-wrapper">
          <div class="contact__contents">
            <div class="contact__body">
              <a href="index.html" class="contact__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.png" alt="CodeUpsロゴ">
              </a>
              <div class="contact__company-information">
                <div class="contact__address-wrapper">
                  <p class="contact__address">
                    沖縄県那覇市1-1
                  </p>
                  <a class="contact__tel" href="tel:000-1234-5678">TEL:0120-000-0000</a>
                  <p class="contact__open-hour">
                    営業時間:8:30-19:00
                  </p>
                  <p class="contact__closed-day">
                    定休日:毎週火曜日
                  </p>
                </div>
                <div id="map" class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57272.98530023876!2d127.64350214096092!3d26.210936437504696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1706751618984!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div><!-- /.contact__information -->
            </div><!-- /.contact__body -->
            <div class="contact__header">
              <div class="contact__section-title section-title section-title--contact">
                <span class="section-title__en section-title__en--contact">
                  contact
                </span>
                <h2 class="section-title__jp section-title__jp--contact">
                  お問い合わせ
                </h2>
              </div>
              <a href="contact.html" class="contact__link">
                ご予約・お問い合わせはコチラ
              </a>
              <!-- ボタン -->
              <div class="contact__button">
                <a href="<?php echo get_permalink(18); ?>" class="button">
                  <span>contact us</span>
                </a>
              </div>
            </div><!-- /.contact__header -->
          </div><!-- /.contact__contents -->
        </div><!-- /.contents-wrapper -->
      </div><!-- /.contact__inner -->
    </section><!-- /.contact -->
    <!-- TOPへ戻るボタン -->
    <a href="#top" class="js-button-to-top button-to-top">
      <span></span>
    </a>
  </main>
  <!-- フッター -->
  <footer id="footer" class="footer footer-layout">
    <div class="footer__inner inner">
      <div class="footer__logo-wrapper">
        <!-- フッターロゴ -->
        <div class="footer__logo footer-logo">
          <a href="index.html" class="footer-logo__link">
            <h2 class="footer-logo__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.png" alt="フッターロゴ">
            </h2>
          </a>
        </div>
        <!-- SNSアイコン -->
        <div class="footer__sns footer-sns">
          <a href="#" class="footer-sns__link footer-sns__link--facebook">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-icon.png" alt="facebookアイコン">
          </a>
          <a href="#" class="footer-sns__link footer-sns__link--instagram">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.png" alt="instagramアイコン">
          </a>
        </div>
      </div>

      <!-- フッターナビ -->
      <footer>
        <div class="footer__nav footer-nav">
          <div class="footer-nav__items-wrapper--left">
            <ul class="footer-nav__items footer-nav__items--left01">
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('campaign'))); ?>" class="footer-nav__heading">キャンペーン</a>
                <ul class="footer-nav__sub-items">
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'license-training', get_permalink(get_page_by_path('campaign')))); ?>">ライセンス講習</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'fun-diving', get_permalink(get_page_by_path('campaign')))); ?>">ファンダイビング</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('category', 'trial-diving', get_permalink(get_page_by_path('campaign')))); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>" class="footer-nav__heading">私たちについて</a>
              </li>
            </ul>
            <ul class="footer-nav__items footer-nav__items--left02">
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('information'))); ?>" class="footer-nav__heading">ダイビング情報</a>
                <ul class="footer-nav__sub-items">
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab1', get_permalink(get_page_by_path('information')))); ?>">ライセンス講習</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab2', get_permalink(get_page_by_path('information')))); ?>">ファンダイビング</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(add_query_arg('tab', 'tab3', get_permalink(get_page_by_path('information')))); ?>">体験ダイビング</a>
                  </li>
                </ul>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>" class="footer-nav__heading">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="footer-nav__items-wrapper--right">
            <ul class="footer-nav__items footer-nav__items--right01">
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('voice'))); ?>" class="footer-nav__heading">お客様の声</a>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))); ?>" class="footer-nav__heading">料金一覧</a>
                <ul class="footer-nav__sub-items">
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#license'; ?>">ライセンス講習</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#trial'; ?>">体験ダイビング</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#fun'; ?>">ファンダイビング</a>
                  </li>
                  <li class="footer-nav__sub-item">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('price'))) . '#special'; ?>">スペシャルダイビング</a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="footer-nav__items footer-nav__items--right02">
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('faq'))); ?>" class="footer-nav__heading">よくある質問</a>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('privacypolicy'))); ?>" class="footer-nav__heading">プライバシーポリシー</a>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms-of-service'))); ?>" class="footer-nav__heading">利用規約</a>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="footer-nav__heading footer-nav__heading--contact">お問い合わせ</a>
              </li>
              <li class="footer-nav__item">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('sitemap'))); ?>" class="footer-nav__heading footer-nav__heading--contact">サイトマップ</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <p class="footer__copyright">
        Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.
      </p>
    </div><!-- /.footer__inner inner -->
  </footer><!-- /.footer -->
  <?php wp_footer(); ?>
</body>

</html>