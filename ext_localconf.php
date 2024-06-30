<?php
defined('TYPO3_MODE') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$boot = function () {
    
    // Update flexforms
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][] = \T3ac\T3upNews\Hooks\FlexFormHook::class;
    
    ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TsConfig/News/Templates.tsconfig">');
    
    if (ExtensionManagementUtility::isLoaded('eventnews')) {
        ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TsConfig/Eventnews/Templates.tsconfig">');
        ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TsConfig/News/Design.tsconfig">');
        ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TypoScript/Eventnews/setup.typoscript">');
        ExtensionManagementUtility::addTypoScriptConstants('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TypoScript/Eventnews/constants.typoscript">');
    }
    
};



# Extensions #####################################

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Repository\NewsRepository::class] = [
   'className' => \T3ac\T3upNews\Domain\Repository\NewsRepository::class
];


$boot();
unset($boot);