<!-- price 料金一覧 -->
<?php get_header(); ?>

<main>
    <!-- 下層 FV -->
    <section class="sub-fv">
        <div class="sub-fv__inner">
            <h1 class="sub-fv__heading">
                price
            </h1>
            <picture class="sub-fv__image">
                <source srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-price__fv-pc.jpg')); ?>" media="(min-width: 768px)">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/sub-price__fv-sp.jpg')); ?>" alt="<?php esc_attr_e('海面から覗くダイバーの頭の画像', 'text-domain'); ?>">
            </picture>
        </div>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb'); ?>
    <!-- 下層 コンテンツ -->
    <div class="page-price page-layout">
        <div class="page-price__inner inner">
            <!-- priceリスト -->
            <div class="page-price__price-list page-price-list">
                <ul class="page-price-list__items">
                    <?php
                    $sections = [
                        'license' => 'ライセンス講習',
                        'trial' => '体験ダイビング',
                        'fun' => 'ファンダイビング',
                        'special' => 'スペシャルダイビング',
                    ];

                    $upload_dir = wp_upload_dir();
                    $whale_image_url = esc_url($upload_dir['baseurl'] . '/2024/04/sub-price__icon-whale.png');

                    foreach ($sections as $key => $title) {
                        $courses = SCF::get($key);
                        if (!empty($courses)) {
                            ?>
                            <li class="page-price-list__item">
                                <div class="page-price-list__heading">
                                    <h2 id="<?php echo esc_attr($key); ?>"><?php echo esc_html($title); ?></h2>
                                    <img src="<?php echo $whale_image_url; ?>" alt="<?php esc_attr_e('Whale Icon', 'text-domain'); ?>" class="whale-icon">
                                </div>
                                <dl class="page-price-list__body">
                                    <?php foreach ($courses as $course): ?>
                                        <dt><?php echo esc_html($course["{$key}_course_name"]); ?></dt>
                                        <dd>¥<?php echo esc_html($course["{$key}_price"]); ?></dd>
                                    <?php endforeach; ?>
                                </dl>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
