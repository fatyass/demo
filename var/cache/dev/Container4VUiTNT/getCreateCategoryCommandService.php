<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.App\Command\CreateCategoryCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/src/Command/CreateCategoryCommand.php';
include_once $this->targetDirs[3].'/src/Service/CategoryService.php';

return $this->services['console.command.public_alias.App\Command\CreateCategoryCommand'] = new \App\Command\CreateCategoryCommand(new \App\Service\CategoryService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'))));
