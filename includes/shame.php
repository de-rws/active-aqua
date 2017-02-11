<?php

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_filter('gform_init_scripts_footer', '__return_true');

/**
 * Adjusting the HTML of the submit button to match design
 *
 *
 * @param $button string  required  The text string of the button we're editing
 * @param $form   array   required  The whole form object
 *
 * @return string The new HTML for the button
 */
add_filter( 'gform_submit_button', 'aqua_submit_button', 10, 2 );
function aqua_submit_button( $button, $form ){

  return '<span class="g-submit-btn"><input type="submit" id="gform_submit_button_'.$form["id"].'" value="'. $form["button"]["text"] .'" /></span>';

}

add_filter( 'gform_confirmation_anchor', '__return_true' );
