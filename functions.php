<?php
function change_posts_per_page($query) {
 
    if ( $query->is_archive() ) { 
    if ( is_admin() || ! $query->is_main_query() )
        return;
        $query->set( 'posts_per_page', '6' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );




function create_post_type() {
    $Supportscustom = [
    'title', 
    'editor', 
    'thumbnail', 
    ];
    register_post_type( 'work', 
    array(
        'label' => '実績', 
        'labels' => array( 'all_items' => '実績一覧'
    ),
        'public' => true, 
        'has_archive' => true,
        'menu_position' => 5, 
        'supports' => $Supportscustom 
    )
);
}
add_action( 'init', 'create_post_type' );

function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

add_theme_support('post-thumbnails');

function is_mobile() {
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


function my_theme_customize_register( $wp_customize ) {

  // セクション
  $wp_customize->add_section( 'my_theme_origin_scheme', array(
    'title'     => 'プロフィールのタイトル',
    'priority'  => 200,
  ));

  // Text セッティング
  $wp_customize->add_setting( 'my_theme_options[originText]', array(
    'default'   => 'PROFILE',
    'type'      => 'option',
    'transport' => 'refresh',
  ));
  // Text コントロール
  $wp_customize->add_control( 'my_theme_options_origin_text', array(
    'settings'  => 'my_theme_options[originText]',
    'label'     => 'テキスト入力',
    'section'   => 'my_theme_origin_scheme',
    'type'      => 'text',
  ));
  
  $wp_customize->add_setting( 'my_theme_options[originCheckbox]', array(
    'default'   => false,
    'type'      => 'option',
    'transport' => 'refresh',
  ));
  // Checkbox コントロール
  $wp_customize->add_control( 'my_theme_options_origin_checkbox', array(
    'settings'  => 'my_theme_options[originCheckbox]',
    'label'     => 'PROFILEを表示する',
    'section'   => 'my_theme_origin_scheme',
    'type'      => 'checkbox',
  ));
  
 $wp_customize->add_setting( 'text_color', array(
    'default' => '#333',
  ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
    'label' => '文字色',
    'section' => 'my_theme_origin_scheme',
    'settings' => 'text_color',
  )));

}
add_action( 'customize_register', 'my_theme_customize_register' );

function customizer_color() 
    {
        ?>
        <style type="text/css">
         /* ヘッダー */
            #profile_name {
                color: <?php echo get_theme_mod( 'text_color', '#333'); ?>;
            }
        </style>
    <?php
    }
add_action( 'wp_head', 'customizer_color');