<?php

return [
    'web_in2help' => [
        'parent' => 'help',
        'position' => [],
        'access' => 'user',
        'iconIdentifier' => 'in2help',
        'labels' => 'LLL:EXT:in2help/Resources/Private/Language/locallang_in2help.xlf',
        'path' => '/module/help/m1',
        'extensionName' => 'In2help',
        'controllerActions' => [
            \In2code\In2help\Controller\HelpController::class => [
                'index',
            ],
        ],
    ],
];
