<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Project\ProjectService;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public $project;

    public function __construct(ProjectService $project)
    {
        $this->project = $project;
    }
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function partners()
    {
        return view('home.partners');
    }

    public function news()
    {
        return view('home.news');
    }

    public function publications()
    {
        return view('home.publications');
    }

    public function business()
    {
        $data = $this->project->getAll();
        return view('home.business', compact('data'));
    }

    public function businessDetail($id)
    {
        $data = $this->project->getBy('id', $id);

        return view('home.business-detail', compact('data'));
    }
}
