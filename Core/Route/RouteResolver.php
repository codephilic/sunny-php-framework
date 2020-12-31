<?php
namespace Core\Route;

class RouteResolver
{
    public $routeCollection;
    public $container;

    public function __construct($container)
    {
        $this->container = $container;
        $this->routeCollection = $container->get('route-collection');
    }

    public function resolve($path)
    {
        $foundroute = $this->routeCollection->find($path);
        $classMethod = explode('::', $foundroute['controller']);

        $class = $classMethod[0];
        $method = $classMethod[1];
        $controller = new $class($this->container);
        return $controller->$method();
    }
}
