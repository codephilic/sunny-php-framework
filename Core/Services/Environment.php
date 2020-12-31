<?php
namespace Core\Services;

use Symfony\Component\Yaml\Yaml;

class Environment
{
    private $env;

    public function __construct()
    {
        $this->env = Yaml::parseFile('env.yml', Yaml::PARSE_OBJECT_FOR_MAP);
    }

    public function getEnvVariables()
    {
        return $this->env;
    }
}
