<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD8wJJKF\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD8wJJKF/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerD8wJJKF.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerD8wJJKF\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerD8wJJKF\appAppKernelProdContainer([
    'container.build_hash' => 'D8wJJKF',
    'container.build_id' => '6401152a',
    'container.build_time' => 1697581413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD8wJJKF');
