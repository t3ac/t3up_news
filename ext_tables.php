<?php
defined('TYPO3_MODE') or die();

$boot = function () {
	
	
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3up_news', 'Configuration/TypoScript', 'T3UP - Newsextender');
 
	$ll = 'LLL:EXT:t3up_news/Resources/Private/Language/locallang_db.xlf:';
	
	$tempColumns  = [
	            'nomore' => [
	                    "exclude" => 1,
	                    "label" =>  $ll . 'tx_news_domain_model_news.nomore',
	                    "config" => [
	                        'type' => 'check',
	                        'default' => 0
	                    ]
	            ],      
	
	];

	// add field to tca
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tempColumns);
	
	// add new field subtitle after title
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes("tx_news_domain_model_news", 'nomore', '', 'after:title');
		
};

$boot();
unset($boot);

