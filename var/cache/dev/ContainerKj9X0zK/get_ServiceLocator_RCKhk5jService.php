<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.RCKhk5j' shared service.

return $this->privates['.service_locator.RCKhk5j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'ad' => ['privates', '.errored..service_locator.RCKhk5j.App\\Entity\\Ad', NULL, 'Cannot autowire service ".service_locator.RCKhk5j": it references class "App\\Entity\\Ad" but no such service exists.'],
], [
    'ad' => 'App\\Entity\\Ad',
]);
