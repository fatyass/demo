<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\JobHistoryService' shared autowired service.

return $this->privates['App\Service\JobHistoryService'] = new \App\Service\JobHistoryService(($this->services['session'] ?? $this->load('getSessionService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));
