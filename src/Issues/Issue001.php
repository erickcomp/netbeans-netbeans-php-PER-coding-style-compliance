<?php

namespace Erickcomp\NetbeansPhpPERCodingStyleCompliance\Issues;

use Erickcomp\NetbeansPhpPERCodingStyleCompliance\Aux\SuperLongLongLongInterface3;
use Erickcomp\NetbeansPhpPERCodingStyleCompliance\Aux\SuperLongLongLongClass1;
use Erickcomp\NetbeansPhpPERCodingStyleCompliance\Aux\SuperLongLongLongInterface2;
use Erickcomp\NetbeansPhpPERCodingStyleCompliance\Aux\SuperLongLongLongInterface1;

/**
 * Checking wrapping configs for extends and implements:
 * 
 * @see https://www.php-fig.org/per/coding-style/#41-extends-and-implements
 */
class Issue001 extends SuperLongLongLongClass1 implements SuperLongLongLongInterface1,
    SuperLongLongLongInterface2, SuperLongLongLongInterface3
{
    //put your code here
}

/*
//Should be:

class Issue001 extends SuperLongLongLongClass1 implements
    SuperLongLongLongInterface1,
    SuperLongLongLongInterface2,
    SuperLongLongLongInterface3
{
    //put your code here
}

*/
