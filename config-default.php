<?php
/**
 * Do not change this file, but instead create file config-local.php
 * and overwrite any of these values if needed there.
 */
return [
    // Database DSN
    'db' => "mysql://root@localhost/dbname;charset=utf8mb4",

    // Project folders
    'dir' => [
        'files' => __DIR__ . '/files',
        'logs' => __DIR__ . '/logs',
        'tmp' => __DIR__ . '/tmp',
    ],
];
