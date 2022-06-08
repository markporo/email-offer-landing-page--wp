<?php

function emailLandingPage_resources() {

  wp_enqueue_style( "style", get_stylesheet_uri() );
  wp_enqueue_script( "main_js", get_template_directory_uri() . '/js/main.js', NULL, 1.0, true);
  wp_localize_script( "main_js", 'userData', array(
      'nonce' => wp_create_nonce('wp_rest'),
      'siteURL' => get_site_url()
  ));

}

add_action( 'wp_enqueue_scripts', 'emailLandingPage_resources');

// THEME SETUP
function emailLandingPage_setup() {

  //Add featured Image support
  add_theme_support('post-thumbnails');

  // Navigation Menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  // 'footer' => __('Footer Menu'),
));

// Add post format support
add_theme_support('post-formats', array('aside', 'gallery', 'link' ));
} 

add_action('after_setup_theme', 'emailLandingPage_setup');

//creates database
// function database_creation() {
//   global $wpdb;
//   $user_details = $wpdb->prefix.'user_emails_from_offer';
//   $charset = $wpdb->get_charset_collate;

//   $user_det = "CREATE TABLE ". $user_details . "(
//         user_ID              int       NOT NULL    AUTO_INCREMENT,
//         fname                varchar(255)      NOT NULL,
//         lname                varchar(255)      NOT NULL,
//         email                varchar(255)      NOT NULL,
//         phone                varchar(255)      NOT NULL,
//         city                 varchar(255)      NOT NULL,
//         specialMessageField  varchar(255),
//         PRIMARY KEY (user_ID)
//     ) $charset;";

//     require_once(ABSPATH.'wp-admin/includes/upgrades.php');

//     dbDelta( $user_det, execute )
// }



// Saves Data to DB
// global $wpdb;

// if (isset($_POST['email-submit'])) {
//   $data = array(
//     'fname' => $_POST['fname'],
//     'lname' => $_POST['lname'],
//     'email' => $_POST['email'],
//     'city' => $_POST['city'],
//     'phone' => $_POST['phone'],
//     'specialMessage' => $_POST['specialMessageField'],
//   );

//   $result = $wpdb -> insert('user_emails_from_offer', $data, $format=NULL);

//   if ($result==1) {
//     echo "<script> alert('Thank you for submitting your email! The offer will be sent to you soon');</script>";
//   } else {
//     echo "<script> alert('Try Again...Unable to submit your email.');</script>";
//   }
// }

?>