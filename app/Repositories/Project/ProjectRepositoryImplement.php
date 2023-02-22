<?php

namespace App\Repositories\Project;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Project;
use App\Models\ProjectGallery;
use Illuminate\Support\Facades\Auth;

class ProjectRepositoryImplement extends Eloquent implements ProjectRepository
{

    /**
     * Model class to be used in this repository for the common methods inside Eloquent
     * Don't remove or change $this->model variable name
     * @property Model|mixed $model;
     */
    protected $model, $projectGallery;

    public function __construct(Project $model, ProjectGallery $projectGallery)
    {
        $this->projectGallery = $projectGallery;
        $this->model = $model;
    }

    public function uploadImage($image, $path)
    {
        $image->store($path, 'public');
        return $image->hashName();
    }

    public function create($data)
    {
        $img = $data['galeri'];
        $data =  $this->model->create([
            'name' => $data['name'],
            'expired_at' => $data['expired'],
            'duration' => $data['duration'],
            'thumbnail' => $this->uploadImage($data['thumbnail'], 'thumbnails'),
            'jenis' => $data['jenis'],
            'status' => 'aktif',
            'biaya' => $data['biaya'],
            'deskripsi' => $data['deskripsi'],
            'user_id' => Auth::user()->id,
            'gmaps' => $data['gmaps'],
            'user_winner_id' => 1
        ]);

        foreach ($img as $gallery) {
            $this->projectGallery->create([
                'project_id' => $data->id,
                'image' => $this->uploadImage($gallery, 'galleries')
            ]);
        }

        return [
            'status' => (bool)$data,
            'message' => $data ? 'Project Created!' : 'Error Creating Project',
            'data' => $data
        ];
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getBy($key, $value)
    {
        return $this->model->where($key, $value)->firstOrFail();
    }

    // Write something awesome :)
}
