<?php

// Output errors to browser - TRUE = silent mode, only e-mails will be sent
define('ERR_SILENT', FALSE);

// Where to send the error report. Leave blank for nowhere
define('ERR_MAIL_TO', 'webmaster@domain.com');
define('ERR_MAIL_TO_NAME', 'Webmaster');

define('ERR_MAIL_FROM', 'webmaster@domain.com');
define('ERR_MAIL_FROM_NAME', strtoupper(ENVIRONMENT) . ' Error Daemon');
define('ERR_MAIL_SUBJECT', SITE_NAME . ': [TYPE] @ [BASENAME]:[LINE]');

// SMTP, or MAIL otherwise
define('ERR_MAIL_METHOD', 'MAIL');

define('SMTP_HOST', 'localhost');
define('SMTP_USER', 'g4send');
define('SMTP_PASS', 's3ndm41l');
define('SMTP_PORT', 25);

// The subject of the mail. Supported tags: [TYPE], [FILE], [LINE], [STRING], [BASENAME]
// Other things of interest to include in the email. CSV of supported values: POST, GET, SERVER, GLOBALS, SESSION
define('ERR_MAIL_FOOTERS', 'POST,GET,SESSION');

$config['err_silent'] = FALSE;
