<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\AccountController' shared autowired service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once \dirname(__DIR__, 4).'\\src\\Controller\\AccountController.php';

return $this->services['App\\Controller\\AccountController'] = new \App\Controller\AccountController(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
