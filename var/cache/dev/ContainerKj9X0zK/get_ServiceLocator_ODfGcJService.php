<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ODfGc_j' shared service.

return $this->privates['.service_locator.ODfGc_j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'userRepo' => 'App\\Repository\\UserRepository',
]);
