<!-- price 料金一覧 -->
<?php get_header(); ?>

<main>
    <!-- 下層 FV -->
    <section class="sub-fv">
        <div class="sub-fv__inner">
            <h2 class="sub-fv__heading">
                price
            </h2>
            <picture class="sub-fv__image">
                <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__fv-pc.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-price__fv-sp.jpg" alt="海面から覗くダイバーの頭の画像">
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
                    // 各セクションのカスタムフィールドから情報を取得し表示
                    $sections = [
                        'license' => 'ダイビング講習',
                        'trial' => '体験ダイビング',
                        'fun' => 'ファンダイビング',
                        'special' => 'スペシャルダイビング',
                    ];

                    foreach ($sections as $key => $title) {
                        $courses = SCF::get($key);
                        if (!empty($courses)) {
                            echo "<h2>{$title}</h2>";
                            echo '<ul>';
                            foreach ($courses as $course) {
                                $course_name = esc_html($course["{$key}_course_name"]);
                                $price = esc_html($course["{$key}_price"]);
                                echo "<li>{$course_name}: ¥{$price}</li>";
                            }
                            echo '</ul>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer(); ?>