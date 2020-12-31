<?php
namespace Core\Services;

use Symfony\Component\HttpFoundation\Request as SymRequest;

class Request
{
    private $request;
    
    public function __construct()
    {
        $this->request = SymRequest::createFromGlobals();
    }

    /**
     * Get the value of request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
