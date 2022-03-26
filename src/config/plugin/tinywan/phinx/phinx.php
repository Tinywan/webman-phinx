<?php

//$app = require config_path().'/thinkorm.php';
//$pdo = $app->getDatabase()->getPdo();

$config = config('thinkorm.default');
var_dump($config);

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_environment' => 'development',
        'development' => [
            'adapter' => 'mysql',
            'host' => 'dnmp-mysql',
            'name' => 'development_db',
            'user' => 'root',
            'pass' => '123456',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
