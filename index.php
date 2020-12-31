<?php
//all request here
require_once "bootstrap.php";

use Core\Classes\Kernal;

$app = new Kernal( $containerBuilder );

$app->resolveRequest();

$app->getResponse();