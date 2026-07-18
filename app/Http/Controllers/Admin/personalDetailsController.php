<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\PersonalDetail;
use App\Http\Requests\UpdatePersonalDetailRequest;


class personalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', personalDetail::class);
        $details = personalDetail::all();

         return view('admin.personalDetails.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', personalDetail::class);
        return view('admin.personalDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(PersonalDetail $personalDetail)
    {
        $this->authorize('update', $personalDetail);
        return view('admin.personalDetails.edit',  [
                'detail' => $personalDetail
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalDetailRequest $request, PersonalDetail $personalDetail)
    {     
        $this->authorize('update', $personalDetail);
         $data = $request->validated();

          if($request->hasFile('profile_image'))
            {
                 // Delete old profile image
                    if ($personalDetail->profile_image) {
                        
                        Storage::disk('public')
                            ->delete('profile/' . $personalDetail->profile_image);
                    }
                
                $image = $request->file('profile_image');
             
                $imageName = time().'_'.$image->getClientOriginalName();
                
                $image->storeAs(
                    'profile',
                    $imageName,
                    'public'
                );

                $data['profile_image'] = $imageName;
            }

           

            if($request->hasFile('resume_file'))
                {
                   
                    // Delete old resume
                    if ($personalDetail->resume_file) {

                        Storage::disk('public')
                            ->delete('resume/' . $personalDetail->resume_file);
                    }

                    $resume = $request->file('resume_file');
                    $resumeName = time().'_'.$resume->getClientOriginalName();

                    $resume->storeAs(
                        'resume',
                        $resumeName,
                        'public'
                    );

                    $data['resume_file'] = $resumeName;
                }

               $personalDetail->update($data);

            return redirect()
            ->route('admin.personalDetails.index')
            ->with('success', 'Personal details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
