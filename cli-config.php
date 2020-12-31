<?php
// cli-config.php
require_once "bootstrap.php";

$entityManager = $containerBuilder->get('database')->getEntityManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
