<?php
return [
    
    'default' => 'testing',
    'migrations' => 'migrations',
    'connections' => [
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