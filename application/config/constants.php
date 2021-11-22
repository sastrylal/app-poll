<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

defined('CURRENCY_SYMBOL')      OR define('CURRENCY_SYMBOL', "$");
defined('CURRENCY_CODE')      OR define('CURRENCY_CODE', "USD");

defined('FACEBOOK_APP_ID')      OR define('FACEBOOK_APP_ID', "449813962448032");
defined('FACEBOOK_APP_SECRET')  OR define('FACEBOOK_APP_SECRET', "ce3ecad15e30c260d55dedb416247610");

defined('GOOGLE_CLIENT_ID')      OR define('GOOGLE_CLIENT_ID', "1048498784914-crm70fbcd5n0dkdmg5pnelsun8rjlmb3.apps.googleusercontent.com");
defined('GOOGLE_CLIENT_SECRET')  OR define('GOOGLE_CLIENT_SECRET', "8tdwQVaqax_nLAazlz1trGLA");

defined('LINKEDIN_CLIENT_ID')      OR define('LINKEDIN_CLIENT_ID', "81wlxxtgemnpd8");
defined('LINKEDIN_CLIENT_SECRET')  OR define('LINKEDIN_CLIENT_SECRET', "rk8UDIPn77NUiBDs");
defined('LINKEDIN_SCOPE')  OR define('LINKEDIN_SCOPE', "r_liteprofile r_emailaddress w_member_social");

defined('PAYPAL_CLIENT_ID')      OR define('PAYPAL_CLIENT_ID', "ARqxxfBq5zwdAcCTbqIa96bd1fgWJzuIWt_oU9VyLeDjJpWGMHcsrn7cgzbmctnX5V6TzgkNMPlGePHi");
defined('PAYPAL_CLIENT_SECRET')  OR define('PAYPAL_CLIENT_SECRET', "EM_5VHo6WTWsJDXRB0C1FHEON4LEJbGk_KDnWpCOiOZXQuB_i_L5MgWtegJj1layWDDj33ddyDMN2BFq");
defined('PAYPAL_EMAIL')      OR define('PAYPAL_EMAIL', "adstaronefin@gmail.com");

//defined('STRIPE_KEY')             OR define('STRIPE_KEY', "pk_test_m9SGDWmcSQeBCBLb7c7y41cI007BAmTS9t");
//defined('STRIPE_SECRET_KEY')      OR define('STRIPE_SECRET_KEY', "sk_test_J7dik0ZLQZu2r37AAxYLBVVI00hbgFuQsI");

defined('STRIPE_KEY')             OR define('STRIPE_KEY', "pk_live_s5yKiMDyJSzVKtzpJI66LeCw00f1Qpz4yv");
defined('STRIPE_SECRET_KEY')      OR define('STRIPE_SECRET_KEY', "sk_live_6weKOBoFJgNqhFdXiRzSe2lW00P5eafoLX");