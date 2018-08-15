<?php

require_once __DIR__."/vendor/autoload.php";

$c = new \Doc\App\CliCounter();
$c->setArgv( $argv );
$c->calc();

foreach ($c->getRes() as $item => $count) {

    echo $item . " - " . $count . "\n";
}


