<!-- campaign キャンペーン -->
<?php get_header(); ?>
<main>
  <!-- 下層 FV -->
  <section class="sub-fv">
    <div class="sub-fv__inner">
      <h2 class="sub-fv__heading">
        campaign
      </h2>
      <picture class="sub-fv__image">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign__fv-pc.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign__fv-sp.jpg" alt="二匹の黄色い魚の画像">
      </picture>
    </div>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb'); ?>
  <!-- 下層campaign コンテンツ -->
  <div class="page-campaign page-layout">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__contents">
        <!-- カテゴリータブ -->
        <div class="page-campaign__tab category-tab">
          <ul class="category-tab__items">
            <li class="category-tab__item category-tab__item--current uppercase">
              <a href="?category=all" data-tag="all">
                all
              </a>
            </li>
            <li class="category-tab__item">
              <a href="?category=license-training" data-tag="license">
                ライセンス講習
              </a>
            </li>
            <li class="category-tab__item">
              <a href="?category=fun-diving" data-tag="fun">
                ファンダイビング
              </a>
            </li>
            <li class="category-tab__item">
              <a href="?category=trial-diving" data-tag="experience">
                体験ダイビング
              </a>
            </li>
          </ul>
        </div>

        <!-- 下層campaign カード群 -->
        <ul class="page-campaign__items page-campaign-cards">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="page-campaign-cards__item page-campaign-card">
                <div class="page-campaign-card">
                  <!-- アイキャッチ画像 -->
                  <figure>
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="No image available">
                      <?php endif; ?>
                    </figure>
                    <div class="page-campaign-card__body">
                      <p class="page-campaign-card__tag category-tag">
                        <?php the_terms(get_the_ID(), 'campaign_category'); ?>
                      </p>
                      <h3 class="page-campaign-card__title">
                      <?php the_title(); ?>
                      </h3>
                      <div class="page-campaign-card__plan">
                      <p class="page-campaign-card__text">
                        全部コミコミ(お一人様)
                      </p>
                      <div class="page-campaign-card__price-wrapper">
                        <p class="page-campaign-card__old-price">
                          ¥<?php the_field('割引前の価格'); ?>
                        </p>
                        <p class="page-campaign-card__new-price">
                          ¥<?php the_field('割引後の価格'); ?>
                        </p>
                      </div>
                      <p class="page-campaign-card__description u-desktop">
                      <?php the_content(); ?>
                      </p>
                      <p class="page-campaign-card__period u-desktop">
                        2023/6/1-9/30
                      </p>
                    </div>
                    <p class="page-campaign-card__contact u-desktop">
                      ご予約・お問い合わせはコチラ
                    </p>
                    <!-- ボタン -->
                    <div class="page-campaign-card__button u-desktop">
                      <a href="contact.html" class="button">
                        <span>contact us</span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>

        </ul>
        <!-- pagination -->
        <div class="page-blog__pagination sub-pagination">
          <?php wp_pagenavi(); ?>
        </div>
        <?php else : ?>
            <p>No campaigns found in this category.</p>
          <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>