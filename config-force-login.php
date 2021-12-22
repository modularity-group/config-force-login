<?php defined("ABSPATH") or die;

add_action("template_redirect", function(){
  if (is_user_logged_in()) return;
  if (false !== stripos(wp_login_url(), $_SERVER['SCRIPT_NAME'])) return;
  wp_redirect(wp_login_url(get_permalink()));
  die();
});
