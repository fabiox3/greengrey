<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR9kgjk4\srcDevProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR9kgjk4/srcDevProjectContainer.php') {
    touch(__DIR__.'/ContainerR9kgjk4.legacy');

    return;
}

if (!\class_exists(srcDevProjectContainer::class, false)) {
    \class_alias(\ContainerR9kgjk4\srcDevProjectContainer::class, srcDevProjectContainer::class, false);
}

return new \ContainerR9kgjk4\srcDevProjectContainer(array(
    'container.build_hash' => 'R9kgjk4',
    'container.build_id' => 'e0d033f0',
    'container.build_time' => 1541346357,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerR9kgjk4');