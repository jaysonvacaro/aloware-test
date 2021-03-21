<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function where($column, $value, $operator = '=');
}
