<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDZ6Ess7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDZ6Ess7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDZ6Ess7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDZ6Ess7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDZ6Ess7\App_KernelDevDebugContainer([
    'container.build_hash' => 'DZ6Ess7',
    'container.build_id' => '65faa5f1',
    'container.build_time' => 1742369425,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDZ6Ess7');
