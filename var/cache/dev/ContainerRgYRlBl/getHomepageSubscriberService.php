<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventListerner\HomepageSubscriber' shared autowired service.

include_once $this->targetDirs[3].'/src/EventListerner/HomepageSubscriber.php';

return $this->privates['App\EventListerner\HomepageSubscriber'] = new \App\EventListerner\HomepageSubscriber(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')));
