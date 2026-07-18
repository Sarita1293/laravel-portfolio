<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\ServicesStoreRequest;
use App\Http\Requests\ServicesUpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Service::class);
        $services = Service::where('status', true)
                ->orderBy('display_order')
                ->get();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Service::class);
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesStoreRequest $request)
    {
        $this->authorize('create', Service::class);
        Service::create($request->validated());

        return redirect()->route('admin.services.index')
                ->with('success','Service created successfully');
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
    public function edit(Service $service)
    {
        $this->authorize('update', $service);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesUpdateRequest $request, Service $service)
    {
        $this->authorize('update', $service);
       $service->update($request->validated());
        return redirect()->route('admin.services.index')->with('success','Service Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->route('admin.services.index')->with('success','Service Deleted Successfully');
    }
}
