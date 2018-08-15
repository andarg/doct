<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 15.08.18
 * Time: 18:06
 */

require_once __DIR__."/vendor/autoload.php";

$c = new \Doc\App\CliCounter();
$c->setArgv( $argv );
$c->calc();

foreach ($c->getRes() as $item => $count) {

    echo $item . " - " . $count . "\n";
}


