<?php

namespace App\Repositories\User;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\User;
use App\Models\UserDetail;

class UserRepositoryImplement extends Eloquent implements UserRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model, $userDetail;

    public function __construct(User $model, UserDetail $userDetail)
    {
        $this->userDetail = $userDetail;
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->findOrfail($id);
    }

    public function storeImage($image, $path)
    {
        $image->store($path, 'public');
        return $image->hashName();
    }

    public function update($id, $data)
    {
        $user = $this->getById($id);
        if (!isset($data['avatar'])) {
            $data['avatar'] = $user->avatar;
        } else {
            $data['avatar'] = $this->storeImage($data['avatar'], 'avatars');
        }
        if (!isset($data['banner'])) {
            $data['banner'] = $user->banner;
        } else {
            $data['banner'] = $this->storeImage($data['banner'], 'banners');
        }
        $user->update([
            'username' => $data['username'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'avatar' => $data['avatar'],
            'banner' => $data['banner'],
            'bio' => $data['biografi'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'institusi' => $data['institusi'],
            'tagline' => $data['tagline'],
        ]);

        return [
            'status' => (bool) $user,
            'data' => $user,
            'message' => ($user) ? 'User Updated!' : 'Error Updating User',
        ];
    }

    public function updateContact($id, $data)
    {
        $user = $this->userDetail->findOrfail($id);
        $user->update([
            'telp' => $data['telp'],
            'website' => $data['website'],
        ]);

        return [
            'status' => (bool) $user,
            'data' => $user,
            'message' => ($user) ? 'User Updated!' : 'Error Updating User',
        ];
    }

    // Write something awesome :)
}
