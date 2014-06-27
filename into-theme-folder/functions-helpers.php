<?php
// This is one that I use on almost every project
// pass array( {acf image array}, {class name}, {image size} )
// and it will return an image with size and everything
function acf_image($aImageAttr) {
  $aImg = $aImageAttr[0];
  $class = $aImageAttr[1];
  $size = $aImageAttr[2];
  if ($size) {
    $widthString = $size . "-width";
    $heightString = $size . "-height";
    $imgStr = "<img src=\"" . $aImg['sizes'][$size] . "\" alt=\"" . $aImg['title'] . "\" width=\"" . $aImg['sizes'][$widthString] . "\" height=\"" . $aImg['sizes'][$heightString] . "\"";
    if ($class) {
      $imgStr .= " class=\"" . $class . "\"";
    }
    $imgStr .= ">";
    return $imgStr;
  } else {
    $imgStr = "<img src=\"" . $aImg['url'] . "\" alt=\"" . $aImg['title'] . "\" width=\"" . $aImg['width'] . "\" height=\"" . $aImg['height'] . "\"";
    if ($class) {
      $imgStr .= " class=\"" . $class . "\"";
    }
    $imgStr .= ">";
    return $imgStr;
  }
}
function acf_link($options) { // link_text, link_destination, class
  $linkText = $options[0];
  $linkDestination = $options[1];
  $html = '<a href="' . $linkDestination . '"';
  if ( count($options) >= 3 ) {
    $html .= ' class="' . $options[2] . '"';
  }
  $html .= '>' . $linkText . '</a>';
  return $html;
}

function acf_in_theme() {
  // ADD ACF
  if( ! class_exists('Acf') ) {
    if ( ! defined( 'FITZ_ENVIRONMENT' ) || FITZ_ENVIRONMENT !== 'local' ) {
      // TODO!!!! define( 'ACF_LITE' , true );
    }
    include_once('inc/advanced-custom-fields/acf.php' );
  }
  // test change

  // ADD REPEATER ADD ON
  if( !function_exists('acf_register_repeater_field') ):
    // add action to include field
    add_action('acf/register_fields', 'acf_register_repeater_field');
    function acf_register_repeater_field() {
      include_once('inc/acf-repeater/repeater.php');
    }
  endif; // class_exists check


  // ADD OPTIONS PAGE ADD ON
  if( ! class_exists('acf_options_page_plugin') ) {
    include_once('inc/acf-options-page/acf-options-page.php');
  }

  if ( ! defined( 'FITZ_ENVIRONMENT' ) || FITZ_ENVIRONMENT !== 'local' ) {
    require_once('inc/acf-export.php');
  }


}
//
// Moving ACF into theme
// 1) Move ACF and addons into the inc folder in theme
// 2) Ensure that FITZ_ENVIRONMENT is set correctly
//    2.1) define('FITZ_ENVIRONMENT', 'local');
// 3) ensure that the fields are exported to inc/acf-export.php
// 4) uncomment acf_in_theme()
// 5) migrate to testing
// 6) delete all fields via the GUI on testing
// 7) uncomment the ACF_LITE activation line and push to testing
// acf_in_theme();


// change name of options panel
if( function_exists('acf_set_options_page_menu') ) {
  acf_set_options_page_menu( __('Theme Settings') );
}



?>