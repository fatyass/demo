<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.eDlhsWQ' shared service.

return $this->privates['.service_locator.eDlhsWQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'job' => ['privates', '.errored..service_locator.eDlhsWQ.App\\Entity\\Job', NULL, 'Cannot autowire service ".service_locator.eDlhsWQ": it references class "App\\Entity\\Job" but no such service exists.'],
    'jobHistoryService' => ['privates', 'App\\Service\\JobHistoryService', 'getJobHistoryServiceService.php', true],
]);
