<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSMkx9xQ\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSMkx9xQ/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSMkx9xQ.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSMkx9xQ\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerSMkx9xQ\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'SMkx9xQ',
    'container.build_id' => 'd8b0785b',
    'container.build_time' => 1542316885,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerSMkx9xQ');
