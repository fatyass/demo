<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUyG4BKQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUyG4BKQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUyG4BKQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUyG4BKQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUyG4BKQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UyG4BKQ',
    'container.build_id' => 'ac15105b',
    'container.build_time' => 1558901999,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUyG4BKQ');
