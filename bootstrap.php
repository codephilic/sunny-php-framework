<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$containerBuilder = new ContainerBuilder();

$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__.'/Core'));

$loader->load('coreServices.yml');

$containerBuilder->compile();
