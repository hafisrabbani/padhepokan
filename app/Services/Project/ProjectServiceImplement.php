<?php

namespace App\Services\Project;

use LaravelEasyRepository\Service;
use App\Repositories\Project\ProjectRepository;
use Yajra\DataTables\DataTables;

class ProjectServiceImplement extends Service implements ProjectService
{

    /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
    protected $mainRepository;

    public function __construct(ProjectRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function create($data)
    {
        return $this->mainRepository->create($data);
    }

    public function getDataTable($request)
    {
        $data = $this->mainRepository->getAll();
        $dataTable = DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('thumbnail', function ($data) {
                $url = asset('storage/thumbnails/' . $data->thumbnail);
                return '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
            })
            ->editColumn('duration', function ($data) {
                return $data->duration . ' Bulan';
            })
            ->editColumn('expired_at', function ($data) {
                return date('d-m-Y', strtotime($data->expired_at));
            })
            ->editColumn('created_at', function ($data) {
                return date('d-m-Y', strtotime($data->created_at));
            })
            ->addColumn('action', function () {
                $button = '<button type="button" name="edit" id="" class="edit btn btn-primary btn-sm">Edit</button>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="" class="delete btn btn-danger btn-sm">Hapus</button>';
                return $button;
            })->rawColumns(['name', 'expired_at', 'duration', 'thumbnail', 'jenis', 'status', 'biaya', 'created_at', 'action'])
            ->make(true);

        return $dataTable;
    }


    public function getAll()
    {
        return $this->mainRepository->getAll();
    }

    public function getBy($key, $value)
    {
        return $this->mainRepository->getBy($key, $value);
    }
    // Define your custom methods :)
}
