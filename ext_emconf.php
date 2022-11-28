<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_news".
 **************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Newsextender',
    'description'      => 'Extends the tx_news Plugin with fields "nomore", "image only", bootstrap-carousel and templates eventnews',
    'version'          => '10.0.1',
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
            'typo3' => '10.4.0-11.5.99',
            'news' => '9.4.1-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
