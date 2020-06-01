<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'umy_blog' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' >lwA{skkhbL%[n5>D-i[pQhx Aq^kD=:Qb$Fn(_2IiylAv^aEi`m?b:0{|b&;:,' );
define( 'SECURE_AUTH_KEY',  'AIygo ^f-z@r!lU?f:/ZVyYQdr[x+6ZkYD~52C0UiP=o<n_!_P`P(4jYr&=39%m$' );
define( 'LOGGED_IN_KEY',    'D^f/tD^pTP0_)hzCXX1wLr+LaEQm%iQx<MUl%iDMy&RvTVxyD2XCQZZF&g37F~wv' );
define( 'NONCE_KEY',        '<(ChK#@%,:a|{_I@He!lfYSG{_fCZm8gT,F^:?-iLz+&jkxry@t>u8*O5sww/whK' );
define( 'AUTH_SALT',        'e{!xEvTX>Wd-*5sO@c@?gP0;.[^ceW#*nQ#&zurz0#A`.QZR5]K1Ue0Rf3&Ae8p|' );
define( 'SECURE_AUTH_SALT', '8K86QPnIh!0!xDpe;r?/4!0X9W-J]8v>A+s{ns+;g{mtf$KuPdv~-?Mx;i%o)dIf' );
define( 'LOGGED_IN_SALT',   '?%v3VYH(u(4GJq@!0:01zzMz{*4pQcv@fwA0gaWD=>QQU5-b&Jh&_oHd&Sq:?4eY' );
define( 'NONCE_SALT',       't$7l8wC#Hpfr`>p:2b);zrZ{p?LnndHD|M:1_295}A0)z#ejGq-@0*&eWlf3_c(~' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
