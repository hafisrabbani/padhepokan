<?php

namespace App\Services\User;

use LaravelEasyRepository\BaseService;

interface UserService extends BaseService
{
    public function getById($id);
    public function update($id, $data);
    public function updateContact($id, $data);
}
