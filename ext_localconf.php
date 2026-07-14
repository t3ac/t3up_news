<?php
defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Update flexforms
call_user_func(static function () {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][] = \T3ac\T3upNews\Hooks\FlexFormHook::class;
});
