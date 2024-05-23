<!-- voice お客様の声 -->
<?php get_header(); ?>

<main>
    <!-- 下層 FV -->
    <section class="sub-fv">
        <div class="sub-fv__inner">
            <h2 class="sub-fv__heading">
                voice
            </h2>
            <picture class="sub-fv__image">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice__fv-pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice__fv-sp.jpg" alt="海に浮かぶダイバーたちの画像">
            </picture>
        </div>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- 下層 コンテンツ -->
    <div class="page-voice page-layout">
        <div class="page-voice__inner inner">
            <!-- カテゴリータブ -->
            <div class="page-voice__contents">
                <div class="page-voice__category-tab category-tab">
                    <ul class="category-tab__items">
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'voice_category',
                            'hide_empty' => false,
                        ));
                        foreach ($terms as $term) :
                            $is_all = ($term->slug === 'all');
                        ?>
                            <li class="category-tab__item <?php echo $is_all ? 'is-active uppercase' : ''; ?>">
                                <a href="<?php echo esc_url(add_query_arg('category', $term->slug, get_post_type_archive_link('voice'))); ?>" data-tab="<?php echo esc_attr($term->slug); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- ボイスカード群 -->
                <div class="page-voice__items voice-cards">
                    <?php
                    $category = isset($_GET['category']) ? $_GET['category'] : 'all';

                    $args = array(
                        'post_type' => 'voice',
                        'posts_per_page' => 6, // 表示件数を6に指定
                    );

                    if ($category !== 'all') {
                        $args['tax_query'] = array(
                            array(
                                'taxonomy' => 'voice_category',
                                'field'    => 'slug',
                                'terms'    => $category,
                            ),
                        );
                    }

                    $query = new WP_Query($args);
                    ?>

                    <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                        <!-- ループ処理開始 -->
                        <a href="<?php the_permalink(); ?>" class="voice-cards__item voice-card">
                            <div class="voice-card__header-wrapper">
                                <div class="voice-card__header">
                                    <div class="voice-card__information">
                                        <p class="wom-card__age">
                                            <?php echo get_field('age'); ?>
                                        </p>
                                        <p class="voice-card__tag category-tag">
                                            <?php 
                                            $terms = get_the_terms(get_the_ID(), 'voice_category');
                                            if (!empty($terms) && !is_wp_error($terms)) {
                                                echo esc_html($terms[0]->name);
                                            } else {
                                                echo 'カテゴリーなし';
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <h3 class="voice-card__title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <figure>
                                    <?php if (get_the_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="">
                                    <?php endif; ?>
                                </figure>
                            </div>
                            <div class="voice-card__body">
                                <?php the_content(); ?>
                            </div>
                        </a>
                        <!-- ループ終了 -->
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>

                <!-- pagination -->
                <div class="page-blog__pagination sub-pagination">
                    <?php wp_pagenavi(); ?>
                </div>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
                    