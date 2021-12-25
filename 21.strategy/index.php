<?php
require 'vendor/autoload.php';
use Design\Src\Context\Context;
use Design\Src\Comparator\IdComparator;
use Design\Src\Comparator\DateComparator;

$context = new Context(new IdComparator());
$elements = $context->executeStrategy([['id' => 2], ['id' => 1], ['id' => 3]]);
var_dump($elements);


//$context = new Context(new DateComparator());
//$elements = $context->executeStrategy([['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']]);
//var_dump($elements);