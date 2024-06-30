<?php
defined('TYPO3') or die();

$fields = [
    'nomore' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:t3up_news/Resources/Private/Language/locallang.xlf:nomore',
        'config' => [
            'type' => 'check',
            'default' => 0
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'nomore', '', 'after:istopnews');