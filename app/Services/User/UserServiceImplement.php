<?php

namespace App\Services\User;

use LaravelEasyRepository\Service;
use App\Repositories\User\UserRepository;

class UserServiceImplement extends Service implements UserService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(UserRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }


    public function getById($id)
    {
        return $this->mainRepository->getById($id);
    }

    public function update($id, $data)
    {
        return $this->mainRepository->update($id, $data);
    }

    public function updateContact($id, $data)
    {
        return $this->mainRepository->updateContact($id, $data);
    }

    // Define your custom methods :)
}
