<?php

require 'vendor/autoload.php';

$calculator = new \MyPackage\Controller\Calculator();
$calculator->multiply(12, 60);
echo "<br />";
$calculator->add(12, 6);

