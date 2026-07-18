<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\skill;
use App\Http\Requests\SkillStoreRequest;
use App\Http\Requests\SkillUpdateRequest;
use App\Models\Skillcategory;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', skill::class);
        $skills = skill::where('status',true)->get();

        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', SkillCategory::class);
        $skillCategories = SkillCategory::where('status', true)
        ->orderBy('display_order')
        ->get();

        return view('admin.skills.create', compact('skillCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillStoreRequest $request)
    {
        $this->authorize('create', skill::class);
        skill::create($request->validated());
        return redirect()->route('admin.skills.index')->with('success','Skill Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(skill $skill)
    {
        $this->authorize('update', $skill);
         $skillCategories = SkillCategory::where('status', true)
        ->orderBy('display_order')
        ->get();

        return view('admin.skills.edit', compact('skill', 'skillCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillStoreRequest $request, skill $skill)
    {
        $this->authorize('update', $skill);
        $skill->update($request->validated());
        return redirect()->route('admin.skills.index')->with('success','Skill Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(skill $skill)
    {
        $this->authorize('delete', $skill);
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('success','Skill Deleted Successfully');

    }
}
