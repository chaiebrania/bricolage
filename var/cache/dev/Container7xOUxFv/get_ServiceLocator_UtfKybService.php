<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Utf_kyb' shared service.

return $this->privates['.service_locator.Utf_kyb'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('comment' => function (): \App\Entity\Comment {
    return ($this->privates['.errored..service_locator.Utf_kyb.App\Entity\Comment'] ?? $this->load('getCommentService.php'));
}, 'manager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}));
