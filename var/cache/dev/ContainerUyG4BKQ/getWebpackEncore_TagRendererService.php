<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'webpack_encore.tag_renderer' shared service.

return $this->privates['webpack_encore.tag_renderer'] = new \Symfony\WebpackEncoreBundle\Asset\TagRenderer(($this->privates['webpack_encore.entrypoint_lookup_collection'] ?? $this->load('getWebpackEncore_EntrypointLookupCollectionService.php')), ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
