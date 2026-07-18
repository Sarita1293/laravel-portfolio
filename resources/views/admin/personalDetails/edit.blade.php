@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
               
            <h3 class="card-title ">Edit Personal Details</h3>
                <a href="{{ route('admin.personalDetails.index') }}" class="btn btn-secondary btn-sm ml-auto">
                 Back
                </a>
            </div>

            <div class="card-body">
             <form action="{{ route('admin.personalDetails.update', $detail->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                             <label>Name</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name', $detail->name) }}">
                        </div>
                        <div class="form-group">
                             <label>Title</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   value="{{ old('title', $detail->title) }}">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text"
                                   name="mobile"
                                   class="form-control"
                                   value="{{ old('mobile', $detail->mobile) }}">
                        </div>
                        <div class="form-group">
                             <label>Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email', $detail->email) }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address"
                                      class="form-control"
                                      rows="3">{{ old('address', $detail->address) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Years of Experience</label>
                            <input type="number"
                                   step="0.1"
                                   name="years_of_experience"
                                   class="form-control"
                                   value="{{ old('years_of_experience', $detail->years_of_experience) }}">
                        </div>
                        <div class="form-group">
                            <label>Profile Image</label>
                            <input type="file"
                                name="profile_image"
                                class="form-control">
                             @if($detail->profile_image)
                                <img src="{{ asset('storage/profile/'.$detail->profile_image) }}"
                                    width="100"
                                    class="mt-2">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Resume File</label>
                            <input type="file"
                                name="resume_file"
                                class="form-control">

                            @if($detail->resume_file)

                                <a href="{{ asset('storage/resume/'.$detail->resume_file) }}"
                                target="_blank">
                                View Current Resume
                                </a>

                            @endif
                        </div>

                        <div class="form-group">
                            <label>LinkedIn URL</label>
                            <input type="text"
                                   name="linkedin_url"
                                   class="form-control"
                                   value="{{ old('linkedin_url', $detail->linkedin_url) }}">
                        </div>
                        <div class="form-group">
                            <label>GitHub URL</label>
                            <input type="text"
                                   name="github_url"
                                   class="form-control"
                                   value="{{ old('github_url', $detail->github_url) }}">
                        </div>
                       
                                                
                         <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        <a href="{{ route('admin.personalDetails.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>

                    </form>
            </div>
        </div>
    </div>
</div>
            
@endsection