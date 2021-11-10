<?php
use Application\Services\Doctrine;

return [
    Doctrine::class => \DI\create(Doctrine::class)
        ->constructor(\DI\get('db.connectionOptions')),
    'db.connectionOptions' => [
        "driver"        =>      "mysql",
        "host"          =>      "127.0.0.1",
        "user"          =>      "root",
        "password"      =>      "hzgtdXcA",
        "port"          =>      3306,
        "dbname"        =>      "doctrinedb"
    ]
];
