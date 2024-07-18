<!-- campaign キャンペーン -->
<?php get_header(); ?>
<main>
    <!-- 下層 FV -->
    <section class="sub-fv">
        <div class="sub-fv__inner">
            <h1 class="sub-fv__heading">
                campaign
            </h1>
            <picture class="sub-fv__image">
                <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-campaign__fv-pc.jpg')); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-campaign__fv-sp.jpg')); ?>" alt="二匹の黄色い魚の画像">
            </picture>
        </div>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- 下層campaign コンテンツ -->
    <div class="page-campaign page-layout">
        <div class="page-campaign__inner inner">
            <div class="page-campaign__contents">
                <!-- カテゴリータブ(CPT UIで追加したタクソノミーを表示・切り替え) -->
                <div class="page-campaign__tab category-tab">
                    <ul class="category-tab__items">
                        <!-- 「ALL」タグはそのまま表示 -->
                        <li class="category-tab__item <?php echo !get_query_var('campaign_category') ? 'is-active' : ''; ?> uppercase">
                            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" data-tag="all">
                                all
                            </a>
                        </li>
                        <!-- それ以外の３つのタグをforeachで回す -->
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'campaign_category',
                            'hide_empty' => false,
                        ));
                        foreach ($terms as $term) :
                            $is_current = (get_query_var('campaign_category') === $term->slug);
                        ?>
                            <li class="category-tab__item <?php echo $is_current ? 'is-active' : ''; ?>">
                                <a href="<?php echo esc_url(add_query_arg('campaign_category', $term->slug, get_post_type_archive_link('campaign'))); ?>" data-tag="<?php echo esc_attr($term->slug); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
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
                                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                                        <?php else : ?>
                                            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-image.jpg')); ?>" alt="No image available">
                                        <?php endif; ?>
                                    </figure>
                                    <div class="page-campaign-card__body">
                                        <p class="page-campaign-card__tag category-tag">
                                            <?php the_terms(get_the_ID(), 'campaign_category'); ?>
                                        </p>
                                        <!-- キャンペーンタイトル -->
                                        <h3 class="page-campaign-card__title">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="page-campaign-card__plan">
                                            <p class="page-campaign-card__text">
                                                <?php echo esc_html(get_field('campaign-price_title')); ?>
                                            </p>
                                            <div class="page-campaign-card__price-wrapper">
                                                <!-- 割引前価格 -->
                                                <p class="page-campaign-card__old-price">
                                                    ¥<?php echo esc_html(get_field('price_previous')); ?>
                                                </p>
                                                <!-- 割引後価格 -->
                                                <p class="page-campaign-card__new-price">
                                                    ¥<?php echo esc_html(get_field('price_new')); ?>
                                                </p>
                                            </div>
                                            <div class="page-campaign-card__description u-desktop">
                                                <?php the_content(); ?>
                                            </div>
                                            <!-- キャンペーン期間 -->
                                            <p class="page-campaign-card__period u-desktop">
                                                <?php echo esc_html(get_field('campaign_period')); ?>
                                            </p>
                                        </div>
                                        <p class="page-campaign-card__contact u-desktop">
                                            ご予約・お問い合わせはコチラ
                                        </p>
                                        <!-- ボタン -->
                                        <div class="page-campaign-card__button u-desktop">
                                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">
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
</main>

<?php get_footer(); ?>
