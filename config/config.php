<?php

$baseConfig['appName'] = 'LightMVC Framework';

/*$baseConfig['doctrine']['DBAL']['CONN_NAME'] = [
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'user'     => 'USERNAME',
    'password' => 'PASSWORD',
    'dbname'   => 'DBNAME',
];*/

$baseConfig['doctrine']['ORM']['em1'] = [
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1:9999',
    'user'     => 'lightmvcuser',
    'password' => '123',
    'dbname'   => 'lightmvctestdb',
];