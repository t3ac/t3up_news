<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3up_news".
 **************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Newsextender',
    'description'      => 'Extends the tx_news Plugin with fields bootstrap-carousel and templates eventnews',
    'version'          => '14.0.01',
    'state'            => 'stable',
    'category'         => 'templates',
    'author'           => 'Michael Lang',
    'author_email'     => 'info@t3ac.de',
    'author_company'   => 'mediadesign',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => false,
    'constraints'      => [
        'depends'   => [
            'typo3' => '14.3-',
            'news' => '13- ',
            't3up' => '14-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
