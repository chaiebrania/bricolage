<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.slWkiio' shared service.

return $this->privates['.service_locator.slWkiio'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('pagination' => function (): \App\Service\PaginationService {
    return ($this->privates['App\Service\PaginationService'] ?? $this->load('getPaginationServiceService.php'));
}, 'repo' => function (): \App\Repository\AdRepository {
    return ($this->privates['App\Repository\AdRepository'] ?? $this->load('getAdRepositoryService.php'));
}));
