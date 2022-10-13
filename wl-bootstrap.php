<?php
/**
 * @package WL_Bootstrap
 * @version 1.0
 */
/*
Plugin Name: WL_Bootstrap
Description: This plugin allows you to use any functions, methods, libraries of Laravel in WordPress project
Author: Duc Le
Version: 1.0
Author URI: https://github.com/lehoangduc
*/
add_action('plugins_loaded', 'wla_bootstrap');
function wla_bootstrap() {
    define("TESTP",true);
}