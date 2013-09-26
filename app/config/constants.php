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
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 					'ab');
define('FOPEN_READ_WRITE_CREATE', 				'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 			'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| Chemistry Constants
|--------------------------------------------------------------------------
|
| Values used in chemistry
|
*/
define('AVOGADRO', 6.02214179e+23); // Avogadro's number (atoms/mol)
define('MM_BE', 9.012182); // molar weight of Beryllium (g/mol)
define('MM_AL', 26.981538); // Al molar weight (g/mol)

/*
|--------------------------------------------------------------------------
| Miscellaneous
|--------------------------------------------------------------------------
|
*/
define('CRONUS_PREFIX',   'http');
define('CRONUS_HOSTNAME', 'hess.ess.washington.edu');
define('CRONUS_BASE', CRONUS_PREFIX . '://' . CRONUS_HOSTNAME);
define('CRONUS_PATH', '/cgi-bin/matweb');
define('CRONUS_URI', CRONUS_BASE . CRONUS_PATH);

/* End of file constants.php */
/* Location: ./system/application/config/constants.php */