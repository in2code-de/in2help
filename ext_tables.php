<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function () {
         \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'In2code.in2help',
            'help',
            'm1',
            '',
            [
                'Help' => 'index'
            ],
            [
                'access' => 'user,group',
                'icon' => 'EXT:in2help/Resources/Public/Icons/module_help.svg',
                'labels' => 'LLL:EXT:in2help/Resources/Private/Language/locallang_in2help.xlf',
            ]
         );
    }
);
