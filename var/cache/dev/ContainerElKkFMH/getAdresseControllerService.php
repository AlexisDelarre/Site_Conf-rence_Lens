<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\AdresseController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/AdresseController.php';

$this->services['App\Controller\AdresseController'] = $instance = new \App\Controller\AdresseController();

$instance->setContainer(($this->privates['service_locator.aqxUcvZ'] ?? $this->load(__DIR__.'/getServiceLocator_AqxUcvZService.php'))->withContext('App\\Controller\\AdresseController', $this));

return $instance;
