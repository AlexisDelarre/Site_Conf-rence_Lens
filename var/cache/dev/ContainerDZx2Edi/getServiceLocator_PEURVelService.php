<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.PEURVel' shared service.

return $this->privates['service_locator.PEURVel'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('conference' => function (): ?\App\Entity\Conference {
    return ($this->services['App\Entity\Conference'] ?? $this->services['App\Entity\Conference'] = new \App\Entity\Conference());
}));
