<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_stop' shared service.

$this->privates['web_server.command.server_stop'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand(\dirname(__DIR__, 2));

$instance->setName('server:stop');

return $instance;
