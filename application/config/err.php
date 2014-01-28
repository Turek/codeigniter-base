<?php

// Should errors not be displayed for the user.
define('ERR_SILENT', FALSE);

// E-mail recipient.
define('ERR_MAIL_TO', 'webmaster@domain.com');
define('ERR_MAIL_TO_NAME', 'Webmaster');

// E-mail from.
define('ERR_MAIL_FROM', 'webmaster@domain.com');
define('ERR_MAIL_FROM_NAME', strtoupper(ENVIRONMENT) . ' Error Daemon');

// E-mail subject
define('ERR_MAIL_SUBJECT', SITE_NAME . ': [TYPE] @ [BASENAME]:[LINE]');

// SMTP, or MAIL otherwise
define('ERR_MAIL_METHOD', 'MAIL');

// SMTP details.
define('SMTP_HOST', 'localhost');
define('SMTP_USER', 'g4send');
define('SMTP_PASS', 's3ndm41l');
define('SMTP_PORT', 25);

// What information should be also attached to error e-mails.
define('ERR_MAIL_FOOTERS', 'POST,GET,SESSION');

$config['err_silent'] = FALSE;
