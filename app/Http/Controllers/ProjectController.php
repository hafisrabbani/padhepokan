<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Services\Project\ProjectService;

class ProjectController extends Controller
{

    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        if (request()->ajax()) {
            return $this->projectService->getDataTable(null);
            // return 'cok';
        }
        return view('dashboard.project.index');
    }


    public function create()
    {
        return view('dashboard.project.create');
    }

    public function store(ProjectRequest $request)
    {
        // dd($request->validated());
        $data = $this->projectService->create($request->validated());
        return response()->json([
            'status' => (bool) $data,
            'message' => (bool) $data ? 'Project Created!' : 'Error Creating Project',
            'data' => $data
        ], (bool) $data ? 200 : 400);
    }
}
