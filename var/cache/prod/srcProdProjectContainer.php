<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXv2ynI8\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXv2ynI8/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerXv2ynI8.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerXv2ynI8\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerXv2ynI8\srcProdProjectContainer(array(
    'container.build_hash' => 'Xv2ynI8',
    'container.build_id' => '73c04033',
    'container.build_time' => 1541346340,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXv2ynI8');
