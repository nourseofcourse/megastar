<?php
# Database Configuration
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
}

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '7XOx16.|wDoGMY>x++i8T ,{cay/mTC$USL2t.-)`hMhu+_Rk-P?m7K:/k(X|3tv');
define('SECURE_AUTH_KEY',  'E_ :u9b9GNJ^FRS u-0|.0KgPX{uvqn:2tCwnOFUt=|*sO9fYM!d7.+eIm1}K(DS');
define('LOGGED_IN_KEY',    'V++~SMZk+a+V<j@h~NLLlysu +=FfO?jXDe>]__mNCM;eav+Htt.!U*U}s|Pyo;Z');
define('NONCE_KEY',        ';kzNKat=+_2B3r3.S#=(Re bF2+EO[BW6{DR 5mNF_CS);N(jjnu!N2M*#4 p5qO');
define('AUTH_SALT',        'INgR(N^dl!|Cgy|X(7OyHpNH}P)mw(zDuXzMqpyp.v[L&`g,LBl]s|KU+|a3j[SG');
define('SECURE_AUTH_SALT', ')YYQ}/N|2t,snHx(@pXU4A3rFvYcuX2B]CY_?lQD&EwIF73yq*FOZ:QlFPQ<L:m@');
define('LOGGED_IN_SALT',   '-}4+=:$Hc<o2CBcPb[jbq,w`Fn@-T78czbwY+VLn uJI|TLptKTnf~B0ii*cN>U2');
define('NONCE_SALT',       'P6tsp(; R7vD!t+dsI22{9 j-IgrkX_jL3-j>m8aeD)1O#m-TMk*Q6idiSfV74 P');
define('JWT_AUTH_SECRET_KEY', '|_q<HJSj7dDWqA%R7_r/Db%M]GS~EtCur4xT n*Db7<B#`q<XP+ -MQV_Q_O?X.r');
//define('JWT_AUTH_CORS_ENABLE', true);

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );


# Hide errors
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

define( 'WP_HOME', 'http://megaadvisordev' );
define( 'WP_SITEURL', 'http://megaadvisordev' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
require_once(ABSPATH . 'wp-settings.php');
