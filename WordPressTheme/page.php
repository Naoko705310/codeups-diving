<!-- privacy policy プライバシーポリシーとterms 利用規約 共通 -->
<?php get_header(); ?>

<?php
// ページのタイトルを取得
$page_title = get_the_title();

// ※管理画面のタイトルは日本語（パンくずの表示は日本語にしたいから）で、この２ページのFVのみ英語にするため。
// プライバシーポリシーまたは利用規約のページに対する条件分岐
if (is_page('privacypolicy')) {
  $page_title = 'Privacy Policy'; // 英語タイトルに上書き
} elseif (is_page('terms-of-service')) {
  $page_title = 'Terms of Service'; // 英語タイトルに上書き
}
?>

<main>
  <!-- 下層 FV -->
  <section class="sub-fv">
    <div class="sub-fv__inner">
    <h2 class="sub-fv__heading">
      <?php echo esc_html($page_title); ?>
    </h2>
      <picture class="sub-fv__image">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-privacy__fv-pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-privacy__fv-sp.jpg" alt="海中のサンゴの画像">
      </picture>
    </div>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>
  <!-- 下層 コンテンツ -->
  <div class="page-privacy page-layout">
    <div class="page-privacy__inner inner">
      <!-- テキストは管理画面で編集 -->
      <?php
      if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      endif;
      ?>
    </div>
  </div>

<?php get_footer(); ?>