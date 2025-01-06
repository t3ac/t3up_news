<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_news".
 **************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Newsextender',
    'description'      => 'Extends the tx_news Plugin with fields bootstrap-carousel and templates eventnews',
    'version'          => '12.0.11',
    'state'            => 'stable',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'michael.lang@h-da.de',
    'author_company'   => 'h_da Hochschule Darmstadt',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => false,
    'constraints'      => [
        'depends'   => [
            'typo3' => '12.4.0-',
            'news' => '12-',
            't3up' => '12.0-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
