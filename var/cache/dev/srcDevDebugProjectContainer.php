<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7DK0r7i\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7DK0r7i/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container7DK0r7i.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container7DK0r7i\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container7DK0r7i\srcDevDebugProjectContainer(array(
    'container.build_hash' => '7DK0r7i',
    'container.build_id' => '81586919',
    'container.build_time' => 1541274307,
), __DIR__.\DIRECTORY_SEPARATOR.'Container7DK0r7i');