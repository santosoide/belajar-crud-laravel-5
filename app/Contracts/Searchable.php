<?php

namespace App\Contracts;

/**
 * Interface Searchable
 *
 * @package App\Contracts
 */
interface Searchable
{
    /**
     * @param     $query
     * @param int $page
     *
     * @return mixed
     */
    public function search($query, $page = 1);

}