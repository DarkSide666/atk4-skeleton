<?php
return array_replace_recursive(
        include __DIR__ . '/config-default.php',
        file_exists(__DIR__ . '/config-local.php')
            ? include __DIR__ . '/config-local.php'
            : []
    );
