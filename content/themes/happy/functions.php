<?php
/** 
 * Functions
 *
 * Smart functions
 *
 * @link Happy Menocal
 *
 * @package Happy
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  include 'config.php';

  /* Add Styles, Fonts, and Javascript */
  function my_enqueue_style() {
    $TEMPLATE = get_template_directory_uri();

    // wp_register_script('scripts-min',get_bloginfo('template_directory').'/prod/scripts.js',array('jquery'),false,true);

    wp_enqueue_style('styles', $TEMPLATE.'/prod/styles.css');
    wp_enqueue_script('underscore', $TEMPLATE.'/prod/underscore.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts-min');
    wp_enqueue_script('scripts-min', $TEMPLATE.'/prod/scripts.js',array('jquery'), '1.0.0', true);
    
    // wp_localize_script( 'scripts-min', 'STANDARD', array('ajaxurl' => admin_url('admin-ajax.php')) );
  }
  add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );


  /* Remove Admin Login */
  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');


  /* remove auto paragraph tag from the-content */
  remove_filter('the_content', 'wpautop');

  
  /**
  * isMobile
  *
  * returns true/false if there is a match for browser. 
  */
  function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }

  
  /**
  *
  * test
  *
  * shortcut to test function
  */
  function test($var, $mes){
    echo "<script>console.log('".$var.", outputs ".$mes."');</script>";
  }


  /**
  *
  * Adds option tab
  *
  */
  if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
  }


  /**
  *
  * Disables Theme Editor
  *
  */
  function remove_editor_menu() {
    remove_action('admin_menu', '_add_themes_utility_last', 101);
  }
  add_action('_admin_menu', 'remove_editor_menu', 1);
  


//   add_action( 'wp_ajax_f711_get_post_content', 'f711_get_post_content_callback' );
//   add_action( 'wp_ajax_nopriv_f711_get_post_content', 'f711_get_post_content_callback' );

//   function f711_get_post_content_callback() {
//     $post_id = intval($_POST['post_id'] );
//     if ( $post_id == 0 ) {
//       $response['error'] = 'true';
//       $response['result'] = 'Invalid Input';
//     } else {
//       $this_post = get_post( $post_id );
//       if ( !is_object( $this_post ) ) {
//         $response['error'] = 'true';
//         $response['result'] =  'There is no post with the ID ' . $post_id;
//       } else {
//         $response['error'] = 'false';
//         $response['result'] =  $thispost->post_content;
//       }
//     }
//     wp_send_json( $response );

// }

?>