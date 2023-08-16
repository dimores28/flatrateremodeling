<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

add_action( 'wp_enqueue_scripts', function() {
	// wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

	// // отменяем зарегистрированный jQuery
	// wp_deregister_script('jquery-core');
	// wp_deregister_script('jquery');

	// // регистрируем
	// wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js?_v=20230612142449', false, null, true );
	// wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	// // подключаем
	// wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), 'null', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('swiper'), 'null', true );
});


add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support('custom-logo');

/**
 * Настройка SMTP
 *
 * @param PHPMailer $phpmailer объект мэилера
 */

 function mihdan_send_smtp_email( PHPMailer $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'smtp.gmail.com';
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Port       = 465;
	$phpmailer->Username = 'dimores95@gmail.com';
	$phpmailer->Password = 'tjdsjpgjemfdogqb';
	// $phpmailer->Username   = 'tal@flatrateremodeling.com';
	// $phpmailer->Password   = 'Tivacleaners2023!';
	$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	$phpmailer->From       = 'tal@flatrateremodeling.com';
	$phpmailer->FromName   = 'Flatrateremodeling site';

}

add_action( 'phpmailer_init', 'mihdan_send_smtp_email' );

add_filter( 'wp_mail_content_type', 'true_content_type' );

 function true_content_type( $content_type ) {
    return 'text/html';
 }


add_action( 'init', function () {

	register_post_type( 'Gallery page', [
		'label'  => 'Gallery page',
		'labels' => [
			'name'               => 'Gallery page', // основное название для типа записи
			'singular_name'      => 'Gallery page', // название для одной записи этого типа
			'add_new'            => 'Adding an add-on', // для добавления новой записи
			'add_new_item'       => 'Adding Gallery page', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Add-on Gallery', // для редактирования типа записи
			'new_item'           => 'New addition', // текст новой записи
			'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
			'search_items'       => 'Found Extra', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in cart', // если не было найдено в корзине
			'menu_name'          => 'Gallery page', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-filter',
		'show_in_rest'       => true,
		'supports'            => [ 'title', 'thumbnail', 'editor'],  // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

	] );

	register_post_type( 'Slider', [
		'label'  => 'Slider',
		'labels' => [
			'name'               => 'Slider', // основное название для типа записи
			'singular_name'      => 'Slide', // название для одной записи этого типа
			'add_new'            => 'Adding slide', // для добавления новой записи
			'add_new_item'       => 'Adding slide', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Add-on slide', // для редактирования типа записи
			'new_item'           => 'New addition', // текст новой записи
			'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
			'search_items'       => 'Found slide', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in slidecart', // если не было найдено в корзине
			'menu_name'          => 'Slider', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-format-gallery',
		'supports'            => [ 'title', 'thumbnail'],  // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

	] );

	register_post_type( 'Slider left', [
		'label'  => 'Slider left',
		'labels' => [
			'name'               => 'Slider', // основное название для типа записи
			'singular_name'      => 'Slide', // название для одной записи этого типа
			'add_new'            => 'Adding slide', // для добавления новой записи
			'add_new_item'       => 'Adding slide', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Add-on slide', // для редактирования типа записи
			'new_item'           => 'New addition', // текст новой записи
			'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
			'search_items'       => 'Found slide', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in slidecart', // если не было найдено в корзине
			'menu_name'          => 'Slider left', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-format-gallery',
		'supports'            => [ 'title'],  // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

	] );

	register_post_type( 'Slider right', [
		'label'  => 'Slider right',
		'labels' => [
			'name'               => 'Slider', // основное название для типа записи
			'singular_name'      => 'Slide', // название для одной записи этого типа
			'add_new'            => 'Adding slide', // для добавления новой записи
			'add_new_item'       => 'Adding slide', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Add-on slide', // для редактирования типа записи
			'new_item'           => 'New addition', // текст новой записи
			'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
			'search_items'       => 'Found slide', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in slidecart', // если не было найдено в корзине
			'menu_name'          => 'Slider right', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-format-gallery',
		'supports'            => [ 'title'],  // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

	] );

	register_post_type( 'Reviews', [
		'label'  => 'Reviews',
		'labels' => [
			'name'               => 'Reviews', // основное название для типа записи
			'singular_name'      => 'Review', // название для одной записи этого типа
			'add_new'            => 'Add a review', // для добавления новой записи
			'add_new_item'       => 'Adding review', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Add-on Editing', // для редактирования типа записи
			'new_item'           => 'New addition', // текст новой записи
			'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
			'search_items'       => 'Found Review', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in cart', // если не было найдено в корзине
			'menu_name'          => 'Reviews', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-admin-page',
		'supports'            => [ 'title', 'thumbnail'],  // 'title','editor','author','thumbnail','excerpt','trackbacks',
	] );

	register_post_type( 'Services section', [
		'label'  => 'Services section',
		'labels' => [
			'name'               => 'Service', // основное название для типа записи
			'singular_name'      => 'Service', // название для одной записи этого типа
			'add_new'            => 'Add a Service', // для добавления новой записи
			'add_new_item'       => 'Adding Service', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Add-on Service', // для редактирования типа записи
			'new_item'           => 'New addition', // текст новой записи
			'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
			'search_items'       => 'Found Service', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in Service', // если не было найдено в корзине
			'menu_name'          => 'Services section', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-admin-tools',
		'supports'            => [ 'title', 'thumbnail'],  // 'title','editor','author','thumbnail','excerpt','trackbacks',
	] );

	register_post_type( 'Basic-info', [
			'label'  => 'Basic-info',
			'labels' => [
				'name'               => 'Basic-info', // основное название для типа записи
				'singular_name'      => 'Basic-info', // название для одной записи этого типа
				'add_new'            => 'Add Basic-info', // для добавления новой записи
				'add_new_item'       => 'Adding Basic-info', // заголовка у вновь создаваемой записи в админ-панели.
				'edit_item'          => 'Basic-info Editing', // для редактирования типа записи
				'new_item'           => 'New Basic-info', // текст новой записи
				'view_item'          => 'Watch the Basic-info', // для просмотра записи этого типа.
				'search_items'       => 'Search for a Basic-info', // для поиска по этим типам записи
				'not_found'          => 'Basic-info not found', // если в результате поиска ничего не было найдено
				'not_found_in_trash' => 'Not found in cart', // если не было найдено в корзине
				'menu_name'          => 'Basic-info', // название меню
			],
			'public'              => false,
			'show_ui'             => true, // зависит от public
			'menu_icon'           => 'dashicons-tickets-alt',
			'supports'            => [ 'title'],  

	] );

});

function getGallery() {
	$args = array(
		'post_type' => 'Gallery page',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => -1,
	);

	$galleryPages = [];

	foreach(get_posts($args) as $post) {
		$extra = get_fields($post->ID);
		$extra['editor'] = apply_filters( 'the_content', $post->post_content );
		$extra['title'] = $post->post_title;
		$extra['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
		$extra['ID'] = $post->ID;

		$galleryPages[] = $extra;
	}

	return $galleryPages;
}

function getGalleryProjectByID($id) {
	$postId = [];
	$postId[0] = $id;

	$args = array(
		'post_type' => 'Gallery page',
		'include'     => $postId,
	);

	$galleryPages = [];

	foreach(get_posts($args) as $post) {
		$extra = get_fields($post->ID);
		$extra['editor'] = apply_filters( 'the_content', $post->post_content );
		$extra['title'] = $post->post_title;
		$extra['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
		$extra['ID'] = $post->ID;

		$galleryPages[] = $extra;
	}

	return $galleryPages;
}

function getSlider() {
	$args = array(
		'post_type' => 'Slider',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => -1,
	);

	$slider = [];

	foreach(get_posts($args) as $post) {
		$slide = get_fields($post->ID);
		$slide['title'] = $post->post_title;
		$slide['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

		$slider[] = $slide;
	}

	return $slider;
}

function getSliderLeft() {
	$args = array(
		'post_type' => 'Slider left',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => -1,
	);

	$slider = [];

	foreach(get_posts($args) as $post) {
		$slide = get_fields($post->ID);
		$slide['title'] = $post->post_title;

		$slider[] = $slide;
	}

	return $slider;
}

function getSliderRight() {
	$args = array(
		'post_type' => 'Slider right',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => -1,
	);

	$slider = [];

	foreach(get_posts($args) as $post) {
		$slide = get_fields($post->ID);
		$slide['title'] = $post->post_title;

		$slider[] = $slide;
	}

	return $slider;
}


function getReviews() {
	$args = array(
		'post_type' => 'Reviews',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => -1,
	);

	$reviews = [];

	foreach(get_posts($args) as $post) {
		$review = get_fields($post->ID);
		$review['title'] = $post->post_title;
		$review['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

		$reviews[] = $review;
	}

	return $reviews;
}

function getFoorReviews() {
	$args = array(
		'post_type' => 'Reviews',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => 4,
	);

	$reviews = [];

	foreach(get_posts($args) as $post) {
		$review = get_fields($post->ID);
		$review['title'] = $post->post_title;
		$review['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

		$reviews[] = $review;
	}

	return $reviews;
}

function getContacts() {
	$args = array(
		'post_type' => 'Basic-info',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => 1,
	);

	$contacts = [];

	foreach(get_posts($args) as $post) {
		$con = get_fields($post->ID);

		$contacts[] = $con;
	}

	return $contacts[0];
}

function getServicesSection() {
	$args = array(
		'post_type' => 'Services section',
		'orderby'   => 'date',
		'order'     => 'ASC',
		'numberposts' => -1,
	);

	$services = [];

	foreach(get_posts($args) as $post) {
		$service = get_fields($post->ID);
		$service['title'] = $post->post_title;
		$service['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

		$services[] = $service;
	}

	return $services;
}



//======================SVG===========================================//
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}