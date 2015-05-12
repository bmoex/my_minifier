<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'My CSS/JS Minifier',
    'description' => 'A frontend plugin that loop through all css/js to minimize it via Google Closure API and cssminifier.com',
    'category' => 'service',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadFolder' => false,
    'createDirs' => null,
    'clearCacheOnLoad' => true,
    'author' => 'Benjamin Serfhos',
    'author_email' => 'benjamin@serfhos.com',
    'author_company' => 'Rotterdam School of Management, Erasmus University',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.0.0-6.2.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);