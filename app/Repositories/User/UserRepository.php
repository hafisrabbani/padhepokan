<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Repository;

interface UserRepository extends Repository
{

    public function getById($id);
    public function update($id, $data);
    public function updateContact($id, $data);
}
