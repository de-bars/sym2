<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ8lXyfo\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ8lXyfo/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ8lXyfo.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ8lXyfo\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJ8lXyfo\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'J8lXyfo',
    'container.build_id' => '5fd6d79c',
    'container.build_time' => 1565362932,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ8lXyfo');
