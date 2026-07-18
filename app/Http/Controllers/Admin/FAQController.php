<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Http\Requests\FAQStoreRequest;
use App\Http\Requests\FAQUpdateRequest;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', FAQ::class);
        $faqs = FAQ::orderBy('display_order')->get();

        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', FAQ::class);
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FAQStoreRequest $request)
    {
        $this->authorize('create', FAQ::class);
        FAQ::create($request->validated());
         return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ created successfully.');
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
    public function edit(FAQ $faq)
    {
        $this->authorize('update', $faq);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FAQUpdateRequest $request, FAQ $faq)
    {
        $this->authorize('update', $faq);
        $faq->update($request->validated());
        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $faq)
    {
        $this->authorize('delete', $faq);
        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('seccess', "The FAQ deleted sucessfully");
    }
}
