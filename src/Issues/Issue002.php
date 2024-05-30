<?php

namespace Erickcomp\NetbeansPhpPERCodingStyleCompliance\Issues;

/**
 * Checking wrapping configs for multi-line declared arrays:
 * 
 * @see https://www.php-fig.org/per/coding-style/#11-arrays
 */
class Issue002
{
    private $arr2 = ['multi', 'line', 'declaration', ['values' => 1, 5, 7], ['nested',
            'array',],];
}

/*
//Should be:
class Issue002
{
    private $arr2 = [
        'multi',
        'line',
        'declaration',
        ['values' => 1, 5, 7],
        [
            'nested',
            'array',
        ],
    ];
}

*/
