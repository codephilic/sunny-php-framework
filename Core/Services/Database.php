<?php

namespace Core\Services;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Database
{
    private $config;

    private $env;

    public function __construct(Environment $environment)
    {
        $this->env = $environment->getEnvVariables();
        $this->config = Setup::createAnnotationMetadataConfiguration(
            $this->env->doctrine->parameters->paths,
            $this->env->doctrine->parameters->isDevMode,
            $this->env->doctrine->parameters->proxyDir,
            $this->env->doctrine->parameters->cache,
            $this->env->doctrine->parameters->useSimpleAnnotationReader
        );
    }

    public function getEntityManager()
    {
        return EntityManager::create((array)$this->env->doctrine->database, $this->config);
    }
}
