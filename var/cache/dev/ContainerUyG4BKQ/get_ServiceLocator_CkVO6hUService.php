<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ckVO6hU' shared service.

return $this->privates['.service_locator.ckVO6hU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'affiliate' => ['privates', '.errored..service_locator.ckVO6hU.App\\Entity\\Affiliate', NULL, 'Cannot autowire service ".service_locator.ckVO6hU": it references class "App\\Entity\\Affiliate" but no such service exists.'],
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true],
    'mailerService' => ['privates', 'App\\Service\\MailerService', 'getMailerServiceService.php', true],
]);
