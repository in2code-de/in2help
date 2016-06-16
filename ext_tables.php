<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {

    /**
     * Registers a Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'In2code.' . $_EXTKEY,
        'help',                    // Make module a submodule of 'help'
        'm1',                    // Submodule key
        '',                        // Position
        array(
            'Help' => 'index'
        ),
        array(
            'access' => 'user,group',
            'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/module_help.svg',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_in2help.xlf',
        )
    );

}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Online-Documentation');

?>
