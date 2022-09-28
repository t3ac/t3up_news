<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$ll = 'LLL:EXT:t3up_news/Resources/Private/Language/locallang_db.xlf:';


$fields  = [
            'nomore' => [
                    "exclude" => 1,
                    "label" =>  $ll . 'tx_news_domain_model_news.nomore',
                    "config" => [
                        'type' => 'check',
                        'default' => 0
                    ]
            ],    
];

$TCA['tx_news_domain_model_news']['palettes']['paletteCore']  = [
    'showitem' => 'istopnews, nomore, type, sys_language_uid',
    'canNotCollapse' => 1
];
 

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', '', '', 'after:title');


