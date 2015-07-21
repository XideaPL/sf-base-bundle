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
interface PaginatorInterface
{
    /**
     * @param SorterInterface $sorter
     */
    function setSorter(SorterInterface $sorter);
    
    /**
     * @return SorterInterface
     */
    function getSorter();
    
    /**
     * @param array $options
     */
    function setOptions(array $options);
    
    /**
     * @return array
     */
    function getOptions();
    
    /**
     * @return \Xidea\Bundle\BaseBundle\Pagination\PaginationInterface
     */
    function paginate($target, $page = 1, $limit = 10, array $options = []);
}
