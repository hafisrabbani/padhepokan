<?php

namespace App\Repositories\Project;

use LaravelEasyRepository\Repository;

interface ProjectRepository extends Repository
{

    // Write something awesome :)

    public function create($data);

    public function getAll();

    public function getBy($key, $value);
}
