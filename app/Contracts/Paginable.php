<?php

namespace App\Contracts;

/**
 * Interface Paginable
 *
 * @package App\Contracts
 */
interface Paginable
{
    /**
     * Get data by pagination
     *
     * @param int    $page
     * @param int    $limit
     * @param array  $column
     * @param string $field
     * @param string $search
     *
     * @return mixed
     */
    public function getByPage($limit = 10, $page = 1, array $column, $field, $search = '');
}