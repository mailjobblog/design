<?php
require "vendor/autoload.php";
use Design\Src\Services\Database;
use Design\Src\Services\ElasticSearch;
use Design\Src\Mediator\Mediator;

$mediator = new Mediator(new Database(), new ElasticSearch());
echo $mediator->docCreate("es_t");