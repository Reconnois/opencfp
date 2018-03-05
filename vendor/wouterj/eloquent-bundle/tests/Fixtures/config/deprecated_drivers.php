<?php

$container->loadFromExtension('wouterj_eloquent', [
    'connections' => [
        'deprecated1' => [
            'driver' => 'postgres',
            'database' => 'foo',
        ],
        'deprecated2' => [
            'driver' => 'sql server',
            'database' => 'bar',
        ],
    ],
]);
