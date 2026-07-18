<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Http\Requests\EducationStoreRequest;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Education::class);
        $educations = Education::orderBy('display_order')
                    ->get();
        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Education::class);
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationStoreRequest $request)
    {
         $this->authorize('create', Education::class);
        Education::create($request->validated());
        return redirect()->route('admin.educations.index')->with('success', 'Education added successfully');

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
    public function edit(Education $education)
    {
        $this->authorize('update', $education);
        return view('admin.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationStoreRequest $request, Education $education)
    {
        $this->authorize('update', $education);
         $education->update($request->validated());

        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Education updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $this->authorize('delete', $education);
        $education->delete();
        return redirect()
            ->route('admin.educations.index')
            ->with('success', 'Project deleted successfully.');
    }
}
