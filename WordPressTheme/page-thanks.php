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
      <div class=" breadcrumb">
        <div class="breadcrumb__inner inner">
          <div class="breadcrumb__text-wrapper">
            <p class="breadcrumb__text">
              <a href="index.html">
                top
              </a>
              <span> <a href="contact.html">お問い合わせ</a></span>
              <span>送信完了</span>
            </p>
          </div>
        </div>
      </div>
      <!-- 下層 コンテンツ -->
      <div class="page-contact-thanks page-layout">
        <div class="page-contact-thanks__inner inner">
          <h2 class="page-contact-thanks__heading">
            お問い合わせ内容を送信完了しました。
          </h2>
          <p class="page-contact-thanks__text">
            このたびは、お問い合わせ頂き<br class="u-mobile">
            誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="u-mobile">
            3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
            自動返信の確認メールをお送りしております。
          </p>
        </div>
      </div>

<?php get_footer(); ?>