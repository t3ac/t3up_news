<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
	
	// Update flexforms
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][] = \T3ac\T3upNews\Hooks\FlexFormHook::class;
	
	ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_news/Configuration/TsConfig/News/Templates.tsconfig'");
	ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_news/Configuration/TsConfig/News/Design.tsconfig'");

	if (ExtensionManagementUtility::isLoaded('eventnews')) {
        ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_news/Configuration/TsConfig/Eventnews/Templates.tsconfig'");
        ExtensionManagementUtility::addTypoScriptSetup("@import 'EXT:t3up_news/Configuration/TypoScript/Eventnews/setup.typoscript'");
		ExtensionManagementUtility::addTypoScriptConstants("@import 'EXT:t3up_news/Configuration/TypoScript/Eventnews/constants.typoscript'");
	}
});
