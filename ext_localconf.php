<?php
defined('TYPO3_MODE') or die();

$boot = function () {

	// Update flexforms
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][] = \T3ac\T3upNews\Hooks\FlexFormHook::class;

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TsConfig/Templates.typoscript">');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TypoScript/setup.typoscript">');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_news/Configuration/TypoScript/constants.typoscript">');    	    
};

$boot();
unset($boot);