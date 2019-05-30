<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.fixtures_load_command' shared service.

$a = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);
$a->addFixtures([0 => ['fixture' => new \App\DataFixtures\AffiliateFixtures(), 'groups' => []], 1 => ['fixture' => new \App\DataFixtures\CategoryFixtures(), 'groups' => []], 2 => ['fixture' => new \App\DataFixtures\JobFixtures(), 'groups' => []], 3 => ['fixture' => new \App\DataFixtures\UserFixtures(), 'groups' => []]]);

$this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand($a);

$instance->setName('doctrine:fixtures:load');

return $instance;