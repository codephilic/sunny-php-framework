<?php

class Route
{
    public $title;

    public $path;

    public $controller;

    public function __construct($title, $path, $controller)
    {
        $this->title = $title;

        $this->path = $path;

        $this->controller = $controller;
    }
}
