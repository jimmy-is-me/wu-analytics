<?php
/**
 * Plugin Name: Wu Analytics
 * Plugin URI:  https://github.com/yourname/wu-analytics
 * Description: 一個簡單、輕量的 WordPress Analytics 外掛，提供 Dashboard 與設定頁面。
 * Version:     1.0.0
 * Author:      WUMETAX 巫峻旻
 * Author URI:  https://wumetax.com/
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wu-analytics
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-loader.php';

function wua_activate() {}
register_activation_hook(__FILE__, 'wua_activate');

function wua_deactivate() {}
register_deactivation_hook(__FILE__, 'wua_deactivate');

add_action('plugins_loaded', array('WUA_Loader', 'init'));
