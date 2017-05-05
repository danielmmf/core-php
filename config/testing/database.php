<?php
return [
    
    'default' => 'local',
    'migrations' => 'migrations',
    'connections' => [
        'local' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'core_test',
            'username'  => 'root',
            'password'  => 'entrar',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'testing' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'core_test',
            'username'  => 'root',
            'password'  => 'entrar',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];