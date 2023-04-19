<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/vendor/autoload.php';

use HelloWorld\Mail;

$entry = new Mail();
echo($entry->sendMail());