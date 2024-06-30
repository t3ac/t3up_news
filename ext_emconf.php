<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_news".
 **************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Newsextender',
    'description'      => 'Extends the tx_news Plugin with fields "nomore", bootstrap-carousel and templates eventnews',
    'version'          => '11.0.01',
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
            'typo3' => '11.5.0-12.4.99',
            'news' => '11.0.0-',
            't3up' => '11.2.0-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
