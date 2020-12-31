<?php
namespace Core\Classes;

use Core\Route\RouteResolver;

class Kernal
{
    public $request;

    public $response;

    public $container;

    public $resolver;

    public function __construct($container)
    {
        $this->resolver = new RouteResolver($container);
        $this->request = $container->get('request')->getRequest();
        $this->container = $container;
        return $this;
    }

    public function resolveRequest()
    {
        $this->response = $this->resolver->resolve($this->request->getPathInfo());
    }

    public function getResponse()
    {
        print $this->response;
    }
}
