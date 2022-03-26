<?php

$config = config('thinkorm.default');

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'development' => [
            'adapter' => 'mysql',
            'host' => $config['hostname'] ?? 'dnmp-mysql',
            'name' => $config['database'] ?? 'development_db',
            'user' => $config['username'] ?? 'root',
            'pass' => $config['password'] ?? '123456',
            'port' => $config['hostport'] ?? '3306',
            'charset' => $config['charset'] ?? 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
