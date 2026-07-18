<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SkillCategory;
use App\Http\Requests\SkillCategoryStoreRequest;
use App\Http\Requests\SkillCategoryUpdateRequest;


class SkillCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', SkillCategory::class);
        $categories = SkillCategory::orderBy('display_order')->get();

        return view('admin.skill_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', SkillCategory::class);
        return view('admin.skill_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillCategoryStoreRequest  $request)
    {
        $this->authorize('create', SkillCategory::class);
        SkillCategory::create($request->validated());

        return redirect()
        ->route('admin.skill-categories.index')
        ->with('success','Category created Successfully');

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
    public function edit(SkillCategory $skill_category)
    {
        $this->authorize('update', $skill_category);
        return view('admin.skill_categories.edit',compact('skill_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillCategoryUpdateRequest $request, SkillCategory $skill_category)
    {
        $this->authorize('update', $skill_category);
        $skill_category->update($request->validated());
        return redirect()
                ->route('admin.skill-categories.index')
                ->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillCategory $skill_category)
    {
        $this->authorize('delete', $skill_category);
        $skill_category->delete();
        return redirect()
                ->route('admin.skill-categories.index')
                ->with('success', 'Category Deleted Successfully');

    }
}
