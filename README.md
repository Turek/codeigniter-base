# Codeigniter Base

My custom Codeigniter base with PHPMailer, Error reporting via e-mails and a little tweaked Template engine.

## Error reporting

A helper for reporting errors while they happen to specified e-mail address.

Files used:
    application/helpers/err_helper.php
    application/config/err.php

### config/err.php

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

## PHPMailer

Sending e-mails requires PHPMailer library which is supplied in this folder:
    application/libraries/PHPMailer

## Enjoy!
