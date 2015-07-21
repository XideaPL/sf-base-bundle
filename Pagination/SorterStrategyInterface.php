<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Bundle\BaseBundle\Pagination;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface SorterStrategyInterface
{
    /**
     * @return array
     */
    function sort($target, $fields);
    
    /**
     * 
     * @param mixed $target
     * 
     * @return bool
     */
    function support($target);
}
