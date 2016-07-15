<?php
/**
 * radians_clothes functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package radians_clothes
 */

if ( ! function_exists( 'radians_clothes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function radians_clothes_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on radians_clothes, use a find and replace
	 * to change 'radians_clothes' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'radians_clothes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'radians_clothes' ),
		'footer' => esc_html__( 'Footer', 'radians_clothes' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'radians_clothes_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'radians_clothes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function radians_clothes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'radians_clothes_content_width', 640 );
}
add_action( 'after_setup_theme', 'radians_clothes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function radians_clothes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'radians_clothes' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'radians_clothes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'radians_clothes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function radians_clothes_scripts() {
	//wp_enqueue_style( 'radians_clothes-style', get_stylesheet_uri() );
	wp_enqueue_style( 'radians_clothes-bootatrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'radians_clothes-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'radians_clothes-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'radians_clothes-styles', get_template_directory_uri() . '/css/styles.min.css' );

	wp_enqueue_script( 'radians_clothes-jquery-2.1.4', get_template_directory_uri() . '/js/jquery-2.1.4.js', array(),'', true );
	wp_enqueue_script( 'radians_clothes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'radians_clothes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'radians_clothes-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'', true );
	//wp_enqueue_script( 'radians_clothes-customizer', get_template_directory_uri() . '/js/customizer.js',  array(),'',true );
	wp_enqueue_script( 'radians_clothes-owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(),'', true );
	wp_enqueue_script( 'radians_clothes-script', get_template_directory_uri() . '/js/script.min.js', array(),'', true );

	wp_localize_script( 'radians_clothes-script', 'myajax',
		array(
			'url' => admin_url( 'admin-ajax.php' )
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'radians_clothes_scripts' );

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/bootstrap_menu.php';

// AJAX ACTION
add_action( 'wp_ajax_email', 'sendEmail' );
add_action( 'wp_ajax_nopriv_email', 'sendEmail' );

function sendEmail() {
	if ( $_POST ) {

		$adminMail = get_option( 'admin_email' );

		$str = "С вашего сайта оставили заявку:<br>";
		$str .= 'Имя: ' . $_POST["name"] . ' <br>';
		$str .= 'Email: ' . $_POST["email"] . ' <br>';
		$str .= 'Сообщение: ' . $_POST["mess"] . ' <br>';

		wp_mail( $adminMail, "Письмо с сайта", $str, "Content-type: text/html; charset=UTF-8\r\n" );
	}
	wp_die();
}

function pagination() { // функция вывода пагинации
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	$links = paginate_links(array( // вывод пагинации с опциями ниже
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
		'format' => '?paged=%#%', // формат, %#% будет заменено
		'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
		'type' => 'array', // нам надо получить массив
		'prev_text' => '', // текст назад
		'next_text' => '', // текст вперед
		'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
		'show_all' => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size' => 15, // сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size' => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args' => false, // массив GET параметров для добавления в ссылку страницы
		'add_fragment' => '', // строка для добавления в конец ссылки на страницу
		'before_page_number' => '', // строка перед цифрой
		'after_page_number' => '' // строка после цифры
	));
	if( is_array( $links ) ) { // если пагинация есть

				echo '<div class="search-content__pagination">';
		foreach ( $links as $link ) {
			if ( strpos( $link, 'current' ) !== false ) echo $link; // если это активная страница
			else echo $link;
		}
		echo '</div>';
	}

}