<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMAmZWok\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMAmZWok/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMAmZWok.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMAmZWok\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMAmZWok\App_KernelDevDebugContainer([
    'container.build_hash' => 'MAmZWok',
    'container.build_id' => '0b904d72',
    'container.build_time' => 1645439823,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMAmZWok');
