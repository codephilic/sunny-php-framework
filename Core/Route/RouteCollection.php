<?php

namespace Core\Route;

use Core\Services\Environment;
use Symfony\Component\Yaml\Yaml;

class RouteCollection
{
    private $routeCollection = [];

    public function __construct(Environment $environment)
    {
        $envObj = new Environment();
        $env = $envObj->getEnvVariables();
        $temp = [];
        foreach ($env->routes_file as $key => $path) {
            if (Yaml::parseFile($path) != null) {
                $temp[$path] = Yaml::parseFile($path);
            }
        }
        $this->routeCollection = $temp;
    }

    public function getRouteCollection()
    {
        return $this->routeCollection;
    }

    public function find($path)
    {
        $foundroute = null;
        foreach ($this->routeCollection as $file => $routes) {
            foreach ($routes as $key => $route) {
                if ($path == $route['path']) {
                    $foundroute = $route;
                }
            }
        }

        return !empty($foundroute) ? $foundroute : false ;
    }
}
