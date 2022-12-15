<?php

require_once '../vendor/autoload.php';

use Gettext\Scanner\PhpScanner;
use Gettext\Generator\PoGenerator;
use Gettext\Translations;

//Create a new scanner, adding a translation for each domain we want to get:
$phpScanner = new PhpScanner(
    Translations::create('application'),
);

//Set a default domain, so any translations with no domain specified, will be added to that domain
$phpScanner->setDefaultDomain('application');

//Scan files
foreach ( glob('./../*.php') as $file) {
    $phpScanner->scanFile($file);
}

//Save the translations in .po files
$generator = new PoGenerator();

foreach ($phpScanner->getTranslations() as $domain => $translations) {
    $generator->generateFile($translations, "./{$domain}.po");
}