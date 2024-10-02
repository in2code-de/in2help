<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Online-Documentation',
    'description' => 'Provides a Backend Help Modul, to display any page of the frontend in the backend. So you can use this module as an entry point for editors documentation.',
    'category' => 'module',
    'author' => 'Marcus Schwemer',
    'author_email' => 'marcus.schwemer@in2code.de',
    'author_company' => 'in2code GmbH',
    'state' => 'stable',
    'version' => '7.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.2.0-12.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
