<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Http\Requests\ExperienceStoreRequest;
use App\Http\Requests\ExperienceUpdateRequest;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Experience::class);
        $experiences = Experience::orderby('display_order')->get();

        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Experience::class);
         return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceStoreRequest  $request)
    {
        $this->authorize('create', Experience::class);
        Experience::create($request->validated());
        return redirect()->route('admin.experiences.index')->with('success', 'Experience added successfully');
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
    public function edit(Experience $experience)
    {
        $this->authorize('update', $experience);
        return view('admin.experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceUpdateRequest $request, Experience $experience)
    {
        $this->authorize('update', $experience);
        $experience->update($request->validated());
         return redirect()
            ->route('admin.experiences.index')
            ->with('success', 'Experience updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $this->authorize('delete', $experience);
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('seccess', "The experience deleted sucessfully");
    }
}
