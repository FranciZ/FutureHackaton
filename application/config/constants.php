<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
$cms_folder = "";
$main_folder = "";

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);
define('REMOTE_ADDR_IP', $_SERVER['REMOTE_ADDR']);

// Url constants
define('CONST_RELATIVE_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.$main_folder);
define('CONST_BASE_URL', (!empty($_SERVER['HTTPS']) ? 'https' : 'http').'://' . $_SERVER['HTTP_HOST'] . '/'.$main_folder);
define('CONST_BASE_URL_CMS', (!empty($_SERVER['HTTPS']) ? 'https' : 'http').'://' . $_SERVER['HTTP_HOST'] . '/'.$cms_folder);
define('CONST_IMG_THUMB_URL', CONST_BASE_URL_CMS."img/upload/thumb/");
define('CONST_IMG_URL',CONST_BASE_URL_CMS."img/upload/");

// Email SMTP config constants
define('SMTP_PASSWORD', '');
define('SMTP_USERNAME', '');
define('SMTP_HOST', '');
define('SMTP_PORT', '');
define('EMAIL_SENDER', '');
define('EMAIL_TITLE', '');
define('EMAIL_SUBJECT', '');
/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */