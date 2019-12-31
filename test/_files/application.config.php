<?php
$cacheDir = sys_get_temp_dir() . '/laminas-module-test';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir);
}

return array(
    'modules' => array(
        'Laminas\Router',
        'Laminas\Validator',
        'Laminas\Mvc\Console',
        'Laminas\Mvc\Plugin\FlashMessenger',
        'Baz',
    ),
    'module_listener_options' => array(
        'config_cache_enabled' => true,
        'cache_dir'            => $cacheDir,
        'config_cache_key'     => 'phpunit',
        'config_static_paths'  => array(),
        'module_paths'         => array(
            'Baz' => __DIR__ . '/Baz/',
        ),
    ),
);
