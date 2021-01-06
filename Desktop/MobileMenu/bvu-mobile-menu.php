<?php
/**
 * Plugin Name: BVU Mobile Menu
 * Plugin URI: http://hocwp.net
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. // Phần mô tả cho plugin
 * Version: 1.0
 * Author: Sau Hi
 * Author URI: http://sauhi.com
 * License: GPLv2 or later
 */


/**
  @ Thiết lập các hằng dữ liệu quan trọng
  @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
**/
// define( 'PLUGIN_DIR', plugin_dir_path() );

$settingFileDir = plugin_dir_path( __FILE__ ) . 'includes/settings-injector.php';
require($settingFileDir);

?>

