
@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Edit Project</h3>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm ml-auto">
                 Back
                </a>
            </div>

            <div class="card-body">
                
                    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
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
                            <label>Project Title</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Project Title" name="title" value="{{ $project->title }}">
                        </div>
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea
                                name="short_description"
                                class="form-control"
                                rows="3"
                                placeholder="Enter Short Description"> {{ $project->short_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea
                                class="form-control"
                                rows="5"
                                placeholder="Enter Description" name="description"> {{ $project->description }} </textarea>
                        </div>
                        <div class="form-group">
                            <label>Project Date</label>
                            <input
                                type="date"
                                name="project_date"
                                class="form-control" value="{{ $project->project_date }}">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <input
                                type="text"
                                name="role"
                                class="form-control"
                                placeholder="Developer / Full Stack Developer" value="{{ $project->role }}">
                        </div>
                        <div class="form-group">
                            <label>GitHub URL</label>
                            <input
                                type="text"
                                name="github_url"
                                class="form-control" value="{{ $project->github_url }}">
                        </div>
                        <div class="form-group">
                            <label>Live URL</label>
                            <input
                                type="text"
                                name="live_url"
                                class="form-control" value="{{ $project->live_url }}">
                        </div>
                        <div class="form-group">
                            <label>Thumbnail Image</label>
                            <input
                                type="file"
                                name="thumbnail_image"
                                class="form-control">
                        </div>
                                                
                        <div class="form-group">
                            <label>Skills</label>
                           
                            <select class="form-control" name="skills[]" multiple>
                                @foreach($skills as $skill)
                                     <option value="{{ $skill->id }}" {{ $project->skills->contains($skill->id) ? 'selected' : '' }}>
                                        {{ $skill->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <button class="btn btn-success">
                            Edit Project
                        </button>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>

                    </form>

            </div>
        </div>
    </div>
</div>

@endsection