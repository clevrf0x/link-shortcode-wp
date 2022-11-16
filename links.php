<?php
/**
 * Plugin Name:       Display Links
 * Description:       This plugin includes link shortcode which can be used as anchor tags.
 * Version:           1.0.0
 * Author:            Favas M
 * Author URI:        https://clevrf0x.github.io
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       display_links
 */


function display_links($atts = [], $content = null) {

  $link_atts = shortcode_atts(
    array(
      'href' => '#',
    ), $atts,
  );
  
  
  if (! is_null($content)) {
    $out = '<center><a href="' . $link_atts['href'] . '" style="color: var(--global-color-primary); padding: 0 2vw">' . $content . '</a></center>';
  }
  return isset($out) ? $out : '';
}

add_shortcode('link', 'display_links');

