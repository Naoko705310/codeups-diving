<!-- 404 ページ -->
<?php get_header(); ?>
<main>
      <!-- 下層 コンテンツ -->
      <section class="page-error-404 page-layout--404">
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      
        <div class="page-error-404__inner inner">
          <div class="page-error-404__contents-wrapper">
            <h2 class="page-error-404__heading">
              404
            </h2>
            <p class="page-error-404__text">
              申し訳ありません。<br>
              お探しのページが見つかりません。
            </p>
            <!-- ボタン -->
            <div class="page-error-404__button">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--white">
                <span>page TOP</span>
              </a>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>