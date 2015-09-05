<?php

namespace App\Contracts;

/**
 * Interface Repository
 *
 * @package App\Contracts
 */
interface Repository
{
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function getManyBy($key, $value);

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function getFirstBy($key, $value);

    /**
     * @param array $attributes
     *
     * @return mixed
     */
    public function instance(array $attributes = []);

}
