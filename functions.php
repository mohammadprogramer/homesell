<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




function leftsides(){
$args = array(
'id'            => 'fooer',
'class'         => 'footer',
'name'          => 'آخرین املاک',
'description'   => 'ابزارک ستون کناری را در این بخش قرار دهید.',
'before_title'  => '<h4 class="side_titr">',
'after_title'   => '</h4><div class="clear"></div><div class="side_boxs">',
'before_widget' => '<aside class="widgets_list widgets_wp">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
); register_sidebar($args);}
add_action('widgets_init','leftsides');
// iranthemes.com - rkianoosh.ir


function footersides(){
$args = array(
'id'            => 'fooer2',
'class'         => 'footer2',
'name'          => 'لینک های سریع در فوتر',
'description'   => 'ابزارک ستون کناری را در این بخش قرار دهید.',
'before_title'  => '<h4 class="side_titr">',
'after_title'   => '</h4><div class="clear"></div><div class="side_boxs">',
'before_widget' => '<aside class="widgets_list widgets_wp">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
); register_sidebar($args);}
add_action('widgets_init','footersides');

function copywrite(){
$args = array(
'id'            => 'fooer3',
'class'         => 'footer3',
'name'          => 'متن کپی رایت ',
'description'   => 'ابزارک ستون کناری را در این بخش قرار دهید.',
'before_title'  => '<h4 class="side_titr">',
'after_title'   => '</h4><div class="clear"></div><div class="side_boxs">',
'before_widget' => '<aside class="widgets_list widgets_wp">',
'after_widget'  => '<div class="clear"></div></div><div class="clear"></div></aside>',
); register_sidebar($args);}
add_action('widgets_init','copywrite');


function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );





if (!current_user_can( ‘manage_options’ ))
{
add_filter(‘show_admin_bar’, ‘__return_false’);
}

// IranThemes.com - rkianoosh.ir
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_meta_boxes', '__return_true' );
include_once( 'inc/option-tree/ot-loader.php' );
include_once( 'inc/theme-options.php' );
include_once( 'inc/theme-metabox.php' );
// IranThemes.com - rkianoosh.ir


/**
require_once(get_template_directory()."/option-tree/ot-loader.php");

*/




add_action('admin_menu', 'wpdocs_register_my_custom_submenu_page');

function wpdocs_register_my_custom_submenu_page() {
	add_submenu_page(
		'edit.php?post_type=amlak',
		'راهنما ',
		'راهنما',
		'manage_options',
		'my-custom-submenu-page',
		'wpdocs_my_custom_submenu_page_callback' );
}

function wpdocs_my_custom_submenu_page_callback() {
	echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
		echo '<h2>راهنما</h2>';
	echo '</div>';
}


function wporg_custom_post_type() {
	register_post_type('amlak',
		array(
			'labels'      => array(
				'name'          => __( 'املاک', 'textdomain' ),
				'singular_name' => __( 'ملک', 'textdomain' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'products' ), // my custom slug
			'supports'   => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )


		)
	);
}
add_action('init', 'wporg_custom_post_type');




add_filter('use_block_editor_for_post', '__return_false');

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'main-menu' => __( 'lمنوی بالا', 'text_domain' ),
	    	'footer_menu'  => __( 'منوی پایین', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

//add meta box in wordpress 
function wporg_add_custom_box() {


	
		add_meta_box(
			'wporg_box_id',                 // Unique ID
			'مشخصات ملک',      // Box title
			'wporg_custom_box_html',			// Content callback, must be of type callable
			
			"amlak",
		                        
		);
	
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' );

function wporg_add_custom_box1() {
	$screens = [  'amlak' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id1',                 // Unique ID
			'متراژ',      // Box title
			'wporg_custom_box_html1',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box1' );


function wporg_add_custom_box2() {
	
		add_meta_box(
			'wporg_box_id2',                 // Unique ID
			' قیمت ملک',      // Box title
			'wporg_custom_box_html2',  // Content callback, must be of type callable
			
			"amlak"                          // Post type
		);
	
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box2' );

function add_custom_box( $post ) {
	$screens = [ 'amlak' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id8',                 // Unique ID
			' امکانات رفاهی',      // Box title
			'services_meta_box',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'add_custom_box' );

function add_custom_box1( $post ) {
	$screens = [  'amlak' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id9',                 // Unique ID
			' تعداد اتاق',      // Box title
			'services_meta_box1',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'add_custom_box1' );


function add_custom_box2( $post ) {
	$screens = [ "amlak" ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id0',                 // Unique ID
			' سال ساخت ',      // Box title
			'services_meta_box2',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'add_custom_box2' );

function add_custom_box4( $post ) {
	$screens = [ "amlak" ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wporg_box_id67',                 // Unique ID
			' آدرس کامل ',      // Box title
			'services_meta_box5',  // Content callback, must be of type callable
			$screen                            // Post type
		);
	}
}
add_action( 'add_meta_boxes', 'add_custom_box4' );







///upload image metabox 
function cxc_media_uploader_meta_box() {
	add_meta_box( 'cxc-media-field', 'Media Field', 'cxc_media_uploader_meta_box_func', 'amlak', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'cxc_media_uploader_meta_box' );


//functions for meta box

/// upload image metabox feild 
function cxc_media_uploader_meta_box_func( $post ) {

	$banner_img = get_post_meta( $post->ID, 'cxc_post_banner_img', true );
	?>
	<table cellspacing="10" cellpadding="10">
		<tr>
			<td>Banner Image</td>
			<td>
				<?php echo cxc_multi_media_uploader_field( 'cxc_post_banner_img', $banner_img ); ?>
			</td>
		</tr>
	</table>
	<?php

}
function cxc_multi_media_uploader_field( $name, $value = '' ) {

	$image = '">Add Media';
	$image_str = '';
	$image_size = 'full';
	$display = 'none';
	$value = explode( ',', $value );

	if ( !empty( $value ) ) {
		foreach ( $value as $values ) {
			if ( $image_attributes = wp_get_attachment_image_src( $values, $image_size ) ) {
				$image_str .= '<li data-attechment-id=' . $values . '><a href="' . $image_attributes[0] . '" target="_blank"><img src="' . $image_attributes[0] . '" /></a><i class="dashicons dashicons-no delete-img"></i></li>';
			}
		}
	}

	if($image_str){
		$display = 'inline-block';
	}
	return '<div class="cxc-multi-upload-medias"><ul>' . $image_str . '</ul><a href="#" class="cxc_multi_upload_image_button button' . $image . '</a><input type="hidden" class="attechments-ids ' . $name . '" name="' . $name . '" id="' . $name . '" value="' . esc_attr( implode( ',', $value ) ) . '" /><a href="#" class="cxc_multi_remove_image_button button" style="display:inline-block;display:' . $display . '">Remove media</a></div>';

}



// Save Meta Box values.
add_action( 'save_post', 'cxc_meta_box_save' );

function cxc_meta_box_save( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		return;
	}

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}
	
	if( isset( $_POST['cxc_post_banner_img'] ) ){
		update_post_meta( $post_id, 'cxc_post_banner_img', $_POST['cxc_post_banner_img'] );
	}
}



function cxc_add_admin_media_scripts() {
	
	wp_enqueue_style( 'admin-custom-style', get_stylesheet_directory_uri() . '/css/admin-style.css', false, '1.1', 'all' );
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	wp_enqueue_script( 'admin-custom-script', get_stylesheet_directory_uri() . '/js/admin-script.js', array( 'jquery' ), 1.1, true );

}
add_action( 'admin_enqueue_scripts', 'cxc_add_admin_media_scripts' );





function wporg_custom_box_html( $post ) {
	$value = get_post_meta( $post->ID, '_wporg_meta_key', true );
	?>
	<label for="wporg_field">نوع ملک خود را انتخاب نمایید</label>
</br>
	<select name="wporg_field" id="wporg_field" class="postbox">
		<option value="">انتخاب کنید...</option>
		<option value="aparteman" <?php selected( $value, 'aparteman' ); ?>>آپارتمان</option>
		<option value="sooet" <?php selected( $value, 'sooet' ); ?>>سوییت</option>
		<option value="edari" <?php selected( $value, 'edari' ); ?>>اداری </option>
		<option value="tejari" <?php selected( $value, 'tejari' ); ?>>تجاری </option>
		<option value="zaminmaskoni" <?php selected( $value, 'zaminmaskoni' ); ?>>زمین مسکونی</option>
		<option value="zaminkeshavarzi" <?php selected( $value, 'zaminkeshavarzi' ); ?>>زمین کشاورزی</option>
	</select>




	<?php
}

function wporg_custom_box_html1($post){
	$value = get_post_meta( $post->ID, '_wporg_meta_key1', true );
	?>
	<label for="metraj">متراژ خود را وارد نمایید </label>
	</br>
	<input type="text" id="metraj" name="metraj" placeholder="متراژ را وارد نمایید(متر مربع)" ><br><br>
	
	<?php 
}

function wporg_custom_box_html2($post){
	
	$value = get_post_meta( $post->ID, '_wporg_meta_key2', true );
	?>
	<label for="price">قیمت ملک خود را وارد نمایید </label>
	
	<input type="text" id="price" name="price" placeholder="قیمت را به تومان وارد نمایید"><br><br>
	
	<?php 
	
	
}
function services_meta_box5($post){
	
	$value = get_post_meta( $post->ID, '_wporg_meta_key22', true );
	?>
	<label for="price">موقعیت ملک </label>
	
	<input type="text" id="adress" name="adress" placeholder="آدرس کامل ملک"><br><br>
	
	<?php 
	
	
}



function services_meta_box($post) {
wp_nonce_field( 'my_awesome_nonce', 'awesome_nonce' );    
$checkboxMeta = get_post_meta( $post->ID );
?>

<input type="checkbox" name="wifi" id="wifi" value="yes" <?php if ( isset ( $checkboxMeta['wifi'] ) ) checked( $checkboxMeta['wifi'][0], 'yes' ); ?> />وای فای <br />
<input type="checkbox" name="parking" id="parking" value="yes" <?php if ( isset ( $checkboxMeta['parking'] ) ) checked( $checkboxMeta['parking'][0], 'yes' ); ?> />پارکینگ <br />
<input type="checkbox" name="tel" id="tel" value="yes" <?php if ( isset ( $checkboxMeta['tel'] ) ) checked( $checkboxMeta['tel'][0], 'yes' ); ?> />تلوزیون<br />
<input type="checkbox" name="swi" id="swi" value="yes" <?php if ( isset ( $checkboxMeta['swi'] ) ) checked( $checkboxMeta['swi'][0], 'yes' ); ?> />استخر <br />
<input type="checkbox" name="air" id="air" value="yes" <?php if ( isset ( $checkboxMeta['air'] ) ) checked( $checkboxMeta['air'][0], 'yes' ); ?> />تهویه هوا<br />
<input type="checkbox" name="hot" id="hot" value="yes" <?php if ( isset ( $checkboxMeta['hot'] ) ) checked( $checkboxMeta['hot'][0], 'yes' ); ?> />گاز رو میزی<br />

<?php }

add_action( 'save_post', 'save_services_checkboxes' );




function services_meta_box1($post){
	$value = get_post_meta( $post->ID, '_wporg_meta_key9', true );
	?>
	<label for="room">تعداد اتاق </label>
	</br>
	<input type="number" id="room" name="room" placeholder="تعداد اتاق " ><br><br>
	
	<?php 
	
	
}



function services_meta_box2($post){
	$value = get_post_meta( $post->ID, '_wporg_meta_key0', true );
	?>
	<label for="room">سال ساخت  </label>
	</br>
	<input type="text" id="yeer" name="yeer" placeholder="سال ساخت " ><br><br>
	
	<?php 
	
	
}





//functions for save meta box


function wporg_save_postdata( $post_id ) {
	if ( array_key_exists( 'wporg_field', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key',
			$_POST['wporg_field']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata' );


function wporg_save_postdata1( $post_id ) {
	if ( array_key_exists( 'metraj', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key1',
			$_POST['metraj']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata1' );


function wporg_save_postdata2( $post_id ) {
	if ( array_key_exists( 'price', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key2',
			$_POST['price']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata2' );


function wporg_save_postdata9( $post_id ) {
	if ( array_key_exists( 'room', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key9',
			$_POST['room']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata9' );

function wporg_save_postdata0( $post_id ) {
	if ( array_key_exists( 'yeer', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key0',
			$_POST['yeer']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata0' );


function wporg_save_postdata00( $post_id ) {
	if ( array_key_exists( 'adress', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_wporg_meta_key22',
			$_POST['adress']
		);
	}
}
add_action( 'save_post', 'wporg_save_postdata00' );



function save_services_checkboxes( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
    if ( ( isset ( $_POST['my_awesome_nonce'] ) ) && ( ! wp_verify_nonce( $_POST['my_awesome_nonce'], plugin_basename( __FILE__ ) ) ) )
        return;
    if ( ( isset ( $_POST['post_type'] ) ) && ( 'page' == $_POST['post_type'] )  ) {
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }    
    } else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    //saves ui-ux-design's value
    if( isset( $_POST[ 'wifi' ] ) ) {
        update_post_meta( $post_id, 'wifi', 'yes' );
    } else {
        update_post_meta( $post_id, 'wifi', 'no' );
    }

    //saves web-development's value
    if( isset( $_POST[ 'parking' ] ) ) {
        update_post_meta( $post_id, 'parking', 'yes' );
    } else {
        update_post_meta( $post_id, 'parking', 'no' );
    }

    //saves logo-design's value
    if( isset( $_POST[ 'tel' ] ) ) {
        update_post_meta( $post_id, 'tel', 'yes' );
    } else {
        update_post_meta( $post_id, 'tel', 'no' );
    }  
    //saves branding's value
    if( isset( $_POST[ 'swi' ] ) ) {
        update_post_meta( $post_id, 'swi', 'yes' );
    } else {
        update_post_meta( $post_id, 'swi', 'no' );
    }  
    //saves print design's value
    if( isset( $_POST[ 'air' ] ) ) {
        update_post_meta( $post_id, 'air', 'yes' );
    } else {
        update_post_meta( $post_id, 'air', 'no' );
    }  
	if( isset( $_POST[ 'hot' ] ) ) {
        update_post_meta( $post_id, 'hot', 'yes' );
    } else {
        update_post_meta( $post_id, 'hot', 'no' );
    }  
}




the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('medium_large');
the_post_thumbnail('large');
the_post_thumbnail('full');
the_post_thumbnail( array(100,1000) );

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
set_post_thumbnail_size( 600, 600);
add_theme_support('post-thumbnails');
add_image_size('post-thumbnails',900,900,true);


?>
<?php 
///start Elementor function from here


function theme_prefix_register_elementor_locations( $elementor_theme_manager ) {

	$elementor_theme_manager->register_all_core_location();

}
add_action( 'elementor/theme/register_locations', 'theme_prefix_register_elementor_locations' );



///// breadcrumb
function the_breadcrumb() {
$sep = ' > ';
if (!is_front_page()) {

// Start the breadcrumb with a link to your homepage
echo '<div class="breadcrumbs">';
echo '<a href="';
echo get_option('home');
echo '">';
bloginfo('name');
echo '</a>' . $sep;

// Check if the current page is a category, an archive or a single page. If so show the category or archive name.تابع نمایش
if (is_category() || is_single() ){
the_category('>');
} elseif (is_archive() || is_single()){
if ( is_day() ) {
printf( __( '%s', 'text_domain' ), get_the_date() );
} elseif ( is_month() ) {
printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
} elseif ( is_year() ) {
printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
} else {
_e( 'Blog Archives', 'text_domain' );
}
}

// If the current page is a single post, show its title with the separator
if (is_single()) {
echo $sep;
the_title();
}

// If the current page is a static page, show its title.
if (is_page()) {
echo the_title();
}

// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
if (is_home()){
global $post;
$page_for_posts_id = get_option('page_for_posts');
if ( $page_for_posts_id ) {
$post = get_page($page_for_posts_id);
setup_postdata($post);
the_title();
rewind_posts();
}
}
echo '</div>';
}
}



///comment

//Comment Field Order
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
    return $fields;
}

///contact form 



function wpschool_contact_scripts(){
    wp_register_script('ajax-contact-script', get_template_directory_uri() . '/ajax-contact-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-contact-script');
 
    wp_localize_script( 'ajax-contact-script', 'ajax_contact_object', array( 
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'loading_message' => __('در حال ارسال اطلاعات ، لطفا صبر کنید...')
        ));
}
add_action('wp_enqueue_scripts', 'wpschool_contact_scripts');

function wpschool_ajax_contact(){
        $hasError = false;
        if(trim($_POST['contactName']) === '') {
               $message = 'لطفا نام خود را وارد نمایید';
               $hasError = true;
        } else {
               $name =  sanitize_text_field($_POST['contactName']);
        }
        if(trim($_POST['email']) === '')  {
               $message = 'لطفا آدرس ایمیل خود را وارد نمایید.';
               $hasError = true;
        } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
               $message = 'آدرس ایمیل وارد شده صحیح نمی باشد';
               $hasError = true;
        } else {
               $email =  sanitize_text_field($_POST['email']);
        }
        if(trim($_POST['commentsText']) === '') {
               $message = 'لطفا پیام خود را وارد نمایید';
               $hasError = true;
        } else {
               $comments = esc_textarea($_POST['commentsText']);
        }
        if(!$hasError) {
               $emailTo = get_option('admin_email');
               $subject = 'یک پیغام از طرف '.$name;
               $body = "نام فرستنده: $name \n\nایمیل نویسنده: $email \n\nپیغام: $comments";
               $headers = 'From: '.$name.' <mohammadzolfalizadeh63@gmail.com> ' . "\r\n" . 'Reply-To: ' . $email;
               wp_mail($emailTo, $subject, $body, $headers);
               $message = __('پیام شما با موفقیت ارسال شد، با تشکر از شما');
        }
         echo json_encode(array('error'=>$hasError, 'message'=>$message));
    die();
}
add_action('wp_ajax_wpschool_ajax_contact', 'wpschool_ajax_contact'); 
add_action('wp_ajax_nopriv_wpschool_ajax_contact', 'wpschool_ajax_contact');






