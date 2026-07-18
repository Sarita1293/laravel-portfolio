<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CurrentLearning;
use App\Http\Requests\CurrentLearningStoreRequest;
use App\Http\Requests\CurrentLearningUpdateRequest;

class CurrentLearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', CurrentLearning::class);
        $currentLearnings = CurrentLearning::where('status',true)->get();
        return view('admin.current_learnings.index',compact('currentLearnings'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', CurrentLearning::class);
        return view('admin.current_learnings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CurrentLearningStoreRequest $request)
    {
        $this->authorize('create', CurrentLearning::class);
        CurrentLearning::create($request->validated());
        return redirect()->route('admin.currentLearnings.index')->with('success','Learning created Successfully.');
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
    public function edit(CurrentLearning $currentLearning)
    {
        $this->authorize('update', $currentLearning);
        return view('admin.current_learnings.edit',compact('currentLearning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CurrentLearningUpdateRequest $request, CurrentLearning $currentLearning)
    {
        $this->authorize('update', $currentLearning);
        $currentLearning->update($request->validated());

        return redirect()->route('admin.currentLearnings.index')->with('success','Learning Updated Successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CurrentLearning $currentLearning)
    {
        $this->authorize('delete', $currentLearning);
        $currentLearning->delete();
       return redirect()->route('admin.currentLearnings.index')->with('success','Service Deleted Successfully');

    }
}
