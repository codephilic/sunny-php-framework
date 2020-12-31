<?php
namespace Core\Services;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Core\Services\Environment as SysEnv;

class Template
{
    private $loader;

    private $twig;
    
    public function __construct(SysEnv $environment)
    {
        $env = $environment->getEnvVariables();
        $this->loader = new FilesystemLoader($env->twig->filesystemLoader);
        $this->twig = new Environment($this->loader, (array)$env->twig->environment);
    }

    /**
     * Get the value of loader
     */
    public function getLoader()
    {
        return $this->loader;
    }


    /**
     * Get the value of twig
     */
    public function getTwig()
    {
        return $this->twig;
    }
}
