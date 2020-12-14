<?php

require __DIR__ . '/autoload.php';

$loader = new Loader(__DIR__ . '/../pages');
$html = $loader->load('index.html');

$printer = new Printer();
$printer->print($html);
