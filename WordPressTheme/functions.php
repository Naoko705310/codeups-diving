<?php
function add_custom_scripts() {
    // ファビコン
    echo '<link rel="shortcut icon" href="' . get_theme_file_uri('/assets/images/common/favicon.ico') . '">';

    // Google フォント
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    // Noto Sans JP
    echo '<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet">';
    
    // Gotu
    echo '<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">';

    // Lato
    echo '<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">';

    // CSS
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array('swiper'));

    // JavaScript
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
    wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('theme-script', get_theme_file_uri('/assets/js/script.js'), array('jquery', 'jquery-inview', 'swiper-js'), null, true);
}

add_action('wp_enqueue_scripts', 'add_custom_scripts');

/* --------------------------------------------
/* アイキャッチ画像の選択項目がメニューに表示されるようにする
/* -------------------------------------------- */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );

/* --------------------------------------------
/* //アーカイブの表示件数変更
//※管理画面の設定の表示件数10件というのは、通常投稿（blog)にしか適用されない。
/* -------------------------------------------- */

function change_posts_per_page($query) {
    if (is_admin() || !$query->is_main_query())
        return;

    // キャンペーンのカスタム投稿タイプアーカイブページの場合
    if ($query->is_post_type_archive('campaign')) {
        $query->set('posts_per_page', '4'); // 表示件数を4に指定
    }

    // お客様の声のカスタム投稿タイプアーカイブページの場合
    if ($query->is_post_type_archive('voice')) {
        $query->set('posts_per_page', '6'); // 表示件数を6に指定
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

/* --------------------------------------------
/* // キャンペーン一覧ページで、記事を分類する
/* -------------------------------------------- */

function filter_campaign_posts_by_category($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive('campaign')) {
        $category_slug = isset($_GET['category']) ? $_GET['category'] : '';
    if (!empty($category_slug) && $category_slug != 'all') {
        $query->set('tax_query', array(
            array(
            'taxonomy' => 'campaign_category',
            'field'    => 'slug',
            'terms'    => $category_slug,
            ),
        ));
        }
    }
}
add_action('pre_get_posts', 'filter_campaign_posts_by_category');

/* --------------------------------------------
/* // お客様の声一覧ページで、記事をカテゴリーごとに分類する
/* -------------------------------------------- */

function filter_voice_posts_by_category($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive('voice')) {
        $category_slug = isset($_GET['category']) ? $_GET['category'] : '';
        if (!empty($category_slug) && $category_slug != 'all') {
            $query->set('tax_query', array(
                array(
                    'taxonomy' => 'voice_category',
                    'field'    => 'slug',
                    'terms'    => $category_slug,
                ),
            ));
        }
    }
}
add_action('pre_get_posts', 'filter_voice_posts_by_category');

/* --------------------------------------------
/* // ヘッダーとフッターのカスタムメニュー化（外観＞メニューに表示）
// うまく実装できなかったので保留。
/* -------------------------------------------- */

function register_my_menus() {
    register_nav_menus(
        array(
            'sp_nav_left' => __('SP Navigation Left'),  // SPナビゲーション 左
            'sp_nav_right' => __('SP Navigation Right'), // SPナビゲーション 右
            'pc_nav' => __('PC Navigation'),             // PCナビゲーション
            'footer_nav' => __('Footer Navigation')      // フッターナビゲーション
        )
    );
}
add_action('init', 'register_my_menus');

// sp-navのカスタムメニュー化
// functions.php
function custom_theme_setup() {
    add_theme_support('menus');
}
add_action('after_setup_theme', 'custom_theme_setup');


/* --------------------------------------------
/* // pc-navを反映する（クラス名を付与して日本語と英語を二行に）
/* -------------------------------------------- */

function my_custom_nav_menu_item($item_output, $item, $depth, $args) {
    if ($args->theme_location == 'pc_nav') {
        if (strpos($item->title, '|') !== false) {
            list($english, $japanese) = explode('|', $item->title);
            // 'pc-nav__link' クラスをaタグに適用
            $item_output = '<a href="' . $item->url . '" class="pc-nav__link">' . trim($english) . '<span>' . trim($japanese) . '</span></a>';
        } else {
            // タイトルに '|' がない場合も 'pc-nav__link' クラスを適用
            $item_output = '<a href="' . $item->url . '" class="pc-nav__link">' . $item->title . '</a>';
        }
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_custom_nav_menu_item', 10, 4);

/* --------------------------------------------
/* // pc-navの'li' タグに 'pc-nav__item' クラスを追加
/* -------------------------------------------- */

function add_classes_on_li($classes, $item, $args) {
    if ($args->theme_location == 'pc_nav') {
        $classes[] = 'pc-nav__item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

/* --------------------------------------------
/* // Contact Form 7で自動挿入されるPタグ、brタグを削除
/* -------------------------------------------- */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

/* --------------------------------------------
/* // ブログ一覧・詳細：サイドバーウィジェット表示
/* -------------------------------------------- */

function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => '人気記事ウィジェット',
        'id'            => 'popular_articles_widget',
        'before_widget' => '<li class="popular-articles__item">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="popular-articles-card__title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

/* --------------------------------------------
/* // カスタムウィジェット（サイドバー）
/* -------------------------------------------- */

class Popular_Articles_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'popular_articles_widget', // Base ID
            '人気記事ウィジェット', // Name
            array('description' => '人気記事を表示するウィジェット') // Args
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // ここでカスタムのHTMLを出力
        echo '<div class="popular-articles">';
        echo '<ul class="popular-articles__items popular-articles-cards">';
        // ここに記事をループして表示するコードを追加
        echo '</ul>';
        echo '</div>';

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('新しいタイトル', 'text_domain');
        ?>
        <p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('タイトル:', 'text_domain'); ?></label> 
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php 
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
}

// ウィジェットを登録する
function register_popular_articles_widget() {
    register_widget('Popular_Articles_Widget');
}
add_action('widgets_init', 'register_popular_articles_widget');

// カスタムウィジェットここまで

/* --------------------------------------------
/* // 固定ページを管理画面に表示
// 料金一覧ページのメニューを表示
/* -------------------------------------------- */

// function add_page_to_admin_menu() {
//     add_menu_page( '料金一覧', '料金一覧', 'manage_options', 'post.php?post=14&action=edit', '', 'dashicons-book-alt', 3);
// }
// add_action( 'admin_menu', 'add_page_to_admin_menu' );


/* --------------------------------------------
/* // キャンペーンカード（３ページ共通）の共通関数を定義する（不要？）
/* -------------------------------------------- */
function get_campaign_posts() {
    $args = array(
        'post_type' => 'campaign', // カスタム投稿タイプ名
        'posts_per_page' => -1,    // 全ての投稿を取得
        'no_found_rows' => true    // ページネーションを行わない場合はこれをtrueに設定
    );
    $campaigns = new WP_Query($args);
    return $campaigns;
}

/* --------------------------------------------
/* ユーザーが URL に year と month パラメータを含むリンクをクリックした場合、その年と月に該当する投稿だけが表示
/* -------------------------------------------- */

function filter_posts_by_month($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_home()) {  // ホームページのクエリであることを確認
            if (isset($_GET['year']) && isset($_GET['month'])) {  // URL に year と month パラメータがあるかチェック
                $query->set('year', $_GET['year']);  // クエリに年を設定
                $query->set('monthnum', $_GET['month']);  // クエリに月を設定
            }
        }
    }
}
add_action('pre_get_posts', 'filter_posts_by_month');

/* --------------------------------------------
/* ブログ記事の訪問数をカウントする
/* -------------------------------------------- */
function set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, (string)$count);
    }
}

function track_post_views($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    set_post_views($post_id);
}
add_action('wp_head', 'track_post_views');


/* --------------------------------------------
/* 管理画面の「投稿」を「ブログ」に変更
/* -------------------------------------------- */
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'ブログ'; // "投稿"を"ブログ"に変更
    $submenu['edit.php'][5][0] = 'ブログ一覧';
    $submenu['edit.php'][10][0] = '新しいブログ';
    $submenu['edit.php'][16][0] = 'タグ';
}
add_action( 'admin_menu', 'change_post_menu_label' );

/* --------------------------------------------
/* 文字省略の文字数を変更する。(トップページのブログカードと口コミカード)
// ※デフォルトでは、110文字
/* -------------------------------------------- */
function twpp_change_excerpt_length( $length ) {
    if (is_front_page()) {
        if (get_post_type() == 'post') {
            return 85; // blog-card の文字数
        } elseif (get_post_type() == 'voice') {
            return 170; // voice-card の文字数
        }
    }
    return $length;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );



// function twpp_change_excerpt_length( $length ) {
//     return 85; 
// }
// add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );






