<?php

namespace pdo_con;

return [
    'type' => $type ?? 'mysql',
    'host' => $host ?? 'localhost',
    'dbname' => $dbname ?? 'sonai2',
    'port' => $port ?? '3306',
    'charset' => $charset ?? 'utf8',
    // 'username' => $username ?? 'root',
    // 'password' => $password ?? 'root',
    'username' => $username ?? 'root',
    'password' => $password ?? '',
];


?>