<!-- voice お客様の声 -->
<?php get_header(); ?>

<main>
    <!-- 下層 FV -->
    <section class="sub-fv">
        <div class="sub-fv__inner">
            <h1 class="sub-fv__heading">
                voice
            </h1>
            <picture class="sub-fv__image">
                <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/sub-voice__fv-pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/sub-voice__fv-sp.jpg" alt="海に浮かぶダイバーたちの画像">
            </picture>
        </div>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- 下層 コンテンツ -->
    <div class="page-voice page-layout">
        <div class="page-voice__inner inner">
            <div class="page-voice__contents">
                <!-- カテゴリータブ(CPT UIで追加したタクソノミーを表示・切り替え) -->
                <div class="page-voice__category-tab category-tab">
                    <ul class="category-tab__items">
                        <!-- 「ALL」タグを表示 -->
                        <li class="category-tab__item <?php echo !get_query_var('voice_category') ? 'is-active' : ''; ?> uppercase">
                            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" data-tag="all">
                                all
                            </a>
                        </li>
                        <!-- それ以外のタグをforeachで回す -->
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'voice_category',
                            'hide_empty' => false,
                        ));
                        foreach ($terms as $term) :
                            $is_current = (get_query_var('voice_category') === $term->slug);
                        ?>
                            <li class="category-tab__item <?php echo $is_current ? 'is-active' : ''; ?>">
                                <a href="<?php echo esc_url(add_query_arg('voice_category', $term->slug, get_post_type_archive_link('voice'))); ?>" data-tab="<?php echo esc_attr($term->slug); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- ボイスカード群 -->
                <div class="page-voice__items voice-cards">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- ループ処理開始 -->
                        <a href="<?php the_permalink(); ?>" class="voice-cards__item voice-card">
                            <div class="voice-card__header-wrapper">
                                <div class="voice-card__header">
                                    <div class="voice-card__information">
                                        <!-- ACFで設定したカスタムフィールドから年齢を取得 -->
                                        <?php
                                        $age = get_field('age');
                                        if (!empty($age)) : ?>
                                            <p class="voice-card__age">
                                                <?php echo esc_html($age); ?>
                                            </p>
                                        <?php endif; ?>
                                        <p class="voice-card__tag category-tag">
                                            <!-- voice_categoryで設定したカテゴリー名を表示 -->
                                            <?php 
                                            $terms = get_the_terms(get_the_ID(), 'voice_category');
                                            if (!empty($terms) && !is_wp_error($terms)) {
                                                echo esc_html($terms[0]->name);
                                            } else {
                                                echo esc_html('カテゴリーなし');
                                            }
                                            ?>
                                        </p>
                                    </div>
                                    <h3 class="voice-card__title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <figure>
                                    <!-- アイキャッチ画像があればurlを取得して表示 -->
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                                    <?php else : ?>
                                        <!-- なければno-image.jpgを表示 -->
                                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/no-image.jpg" alt="">
                                    <?php endif; ?>
                                </figure>
                            </div>
                            <div class="voice-card__body">
                                <!-- 現在の投稿の本文を出力 -->
                                <?php the_content(); ?>
                            </div>
                        </a>
                        <!-- ループ終了 -->
                    <?php endwhile; endif; ?>
                </div>

                <!-- pagination -->
                <div class="page-blog__pagination sub-pagination">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
