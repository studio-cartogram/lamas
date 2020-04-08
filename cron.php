<?php

define('DS', DIRECTORY_SEPARATOR);

// load kirby
require(__DIR__ . DS . 'kirby' . DS . 'bootstrap.php');

$kirby = kirby();
$kirby->configure();
$kirby->cache()->flush();
