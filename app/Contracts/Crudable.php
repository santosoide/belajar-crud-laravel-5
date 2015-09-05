<?php

namespace App\Contracts;

/**
 * Interface Crudable
 *
 * @package App\Contracts
 */
interface Crudable
{
    /**
     * Show one entity
     *
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find($id, array $columns = []);

    /**
     * Store a new Entity
     *
     * @param array $data
     *
     * @return mixed
     */
    public function create(array $data);

    /**
     * Update an Entity
     *
     * @param       $id
     * @param array $data
     *
     * @return mixed
     */
    public function update($id, array $data);

    /**
     * Delete an Entity
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

}