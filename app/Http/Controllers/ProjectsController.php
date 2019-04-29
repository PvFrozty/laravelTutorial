<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::all();

       

        return view('projects/index', ['projects' => $projects]);
    }

    public function create(){
        return view('projects.create');
    }

    public function show(Project $project){
        // $project = Project::findOrFail($id);

        return view('projects/show', compact('project'));
    }

    public function store(){

        // $project = new Project();
        // $project->title =  request('title');
        // $project->description = request('description');
        // $project -> save();
        
        
        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

            $attributes=request()->validate([
                'title'=>['required','max:255','min:3'],
                'description'=>'required'
            ]);
        Project::create($attributes);

       return redirect('/projects');
    }

    public function edit(Project $project){

        // $project = Project::findOrFail($id);
        return view('projects/edit',compact('project'));
    }

    public function update(Project $project){
        // dd('hello');

        // $project =Project::findOrFail($id);

        // $project->title = request('title');
        // $project->description= request('description');
        // $project->save();

        $project->update(request(['title','description']));

        return redirect('/projects');
    }

    public function destroy(Project $project){

        $project->delete();
        

        return redirect('/projects');
    }

    
}
