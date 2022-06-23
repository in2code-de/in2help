<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Online-Documentation',
    'description' => 'Provides a Backend Help Modul, to display any page of the frontend in the backend. So you can use this module as an entry point for editors documentation.',
    'category' => 'module',
    'author' => 'Martin Huber',
    'author_email' => 'martin.huber@in2code.de',
    'author_company' => 'in2code GmbH',
    'state' => 'stable',
    'version' => '6.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
