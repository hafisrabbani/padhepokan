<?php

namespace App\Services\Project;

use LaravelEasyRepository\BaseService;

interface ProjectService extends BaseService
{

    // Write something awesome :)

    public function create($data);
    public function getDataTable($request);
    public function getAll();
    public function getBy($key, $value);
}
