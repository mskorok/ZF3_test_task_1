<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 17.1.6
 * Time: 21:24
 */

return [
    [
        'name' => 'salary [<file>]',
        'description' => 'Calculate salary days',
        'short_description' => 'Calculate salary days',
        'defaults' => [
            'file' => null,
        ],
        'handler' => 'Application\Command\Salary',
    ]
];
