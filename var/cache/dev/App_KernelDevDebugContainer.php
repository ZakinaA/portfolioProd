<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6zQ48gD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6zQ48gD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6zQ48gD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6zQ48gD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6zQ48gD\App_KernelDevDebugContainer([
    'container.build_hash' => '6zQ48gD',
    'container.build_id' => 'f508410e',
    'container.build_time' => 1642529717,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6zQ48gD');
