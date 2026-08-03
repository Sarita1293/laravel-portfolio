<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Project::class);
        $projects = Project::with('skills')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $this->authorize('create', Project::class);
        $skills = Skill::all();
        return view('admin.projects.create',compact('skills'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Project::class);
            $request->validate([
            'title' => 'required|string|max:255|regex:/[A-Za-z]/',
            'short_description' => 'required',
            'description' => 'required',
            'project_date' => 'required|date',
            'role' => 'required',
            'thumbnail_image' => 'required|image',
            'display_order' => 'required|integer|min:1',
            'status' => 'required|boolean',
            'skills' => 'required|array',
        ]);
        


        $image = $request->file('thumbnail_image');

        $imageName = time() . '_' . $image->getClientOriginalName();

        $imagePath = $image->storeAs(
            'projects',
            $imageName,
            'public'
        );

    

        $project = Project::create([

            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'project_date' => $request->project_date,
            'role' => $request->role,
            'github_url' => $request->github_url,
            'live_url' => $request->live_url,
            'thumbnail_image' => $imagePath,
            'display_order' => $request->display_order,
            'status' => $request->status,
            
        ]);

        $project->skills()->sync($request->skills);
       
        return redirect()
        ->route('admin.projects.index')
        ->with('success', 'Project created successfully.');
        
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        $skills = skill::all();
        return view('admin.projects.edit', compact('project', 'skills'));
    }

    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);
         $request->validate([
            'title' => 'required|string|max:255|regex:/[A-Za-z]/',
            'short_description' => 'required',
            'description' => 'required',
            'project_date' => 'required|date',
            'role' => 'required',
            'thumbnail_image' => 'nullable|image',
            'display_order' => 'required|integer|min:1',
            'status' => 'required|boolean',
            'skills' => 'required|array',
        ]);

        

        if ($request->hasFile('thumbnail_image')) {

            $image = $request->file('thumbnail_image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $imagePath = $image->storeAs(
                'projects',
                $imageName,
                'public'
            );
        }
        else{

            $imagePath = $project->thumbnail_image;
        }
        $project->update([

            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'project_date' => $request->project_date,
            'role' => $request->role,
            'github_url' => $request->github_url,
            'live_url' => $request->live_url,
            'thumbnail_image' => $imagePath,
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        $project->skills()->sync($request->skills);
       
        return redirect()
        ->route('admin.projects.index')
        ->with('success', 'Project Updated successfully.');

    }

    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        // Delete image
        $imagePath = public_path('uploads/projects/' . $project->thumbnail_image);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Detach skills
        $project->skills()->detach();

        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
