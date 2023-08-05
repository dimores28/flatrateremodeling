<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;


add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support('custom-logo');

/**
 * Настройка SMTP
 *
 * @param PHPMailer $phpmailer объект мэилера
 */

//  function mihdan_send_smtp_email( PHPMailer $phpmailer ) {
// 	$phpmailer->isSMTP();
// 	$phpmailer->Host       = 'mail.adm.tools';
// 	$phpmailer->SMTPAuth   = true;
// 	$phpmailer->Port       = 465;
// 	$phpmailer->Username   = 'info@tivacleaners.com';
// 	$phpmailer->Password   = 'Tivacleaners2023!';
// 	$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
// 	$phpmailer->From       = 'info@tivacleaners.com';
// 	$phpmailer->FromName   = 'Tivacleaners site';

// }

// add_action( 'phpmailer_init', 'mihdan_send_smtp_email' );

// add_filter( 'wp_mail_content_type', 'true_content_type' );

//  function true_content_type( $content_type ) {
//     return 'text/html';
//  }



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