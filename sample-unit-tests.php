<?php
/**
 * Plugin Name:     Sample Unit Tests
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     sample-unit-tests
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Sample_Unit_Tests
 */

final class WP_Sample_Unit
{
  public function __construct()
  {
    add_action('wp_head', [$this, 'header_code']);
  }

  public function header_code()
  {
    $google_code = get_option('wpmv_google_code');
    $bing_code = get_option('wpmv_google_code');

    echo $this->google_site_verification($google_code);
    echo $this->bing_site_verification($bing_code);
  }

  public function google_site_verification($verification_string)
  {
    echo sprintf('<meta name="google-site-verification" content="%s">', $verification_string);

    return sprintf('<meta name="google-site-verification" content="%s">', $verification_string);
  }

  public function bing_site_verification($verification_string)
  {
    echo sprintf('<meta name="msvalidate.01" content="%s">', $verification_string);

    return sprintf('<meta name="msvalidate.01" content="%s">', $verification_string);
  }
}
new WP_Sample_Unit();
