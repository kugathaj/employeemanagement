<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return $projects;
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->validated());
        return $project;
    }


    public function show(Project $project)
    {
        return $project;
    }


    public function update(UpdateProjectRequest $request, Project $project)
    {

        $project->update($request->validated());
        return  $project;
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return "Project Deleted";
    }
}
