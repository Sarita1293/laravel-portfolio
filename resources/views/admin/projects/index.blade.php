@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Projects</h3>
            </div>

            <div class="card-body">
                            <div class="mb-3">
                <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                    Add Project
                </a>
            </div>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Project Name</th>
                        <th>Project Date</th>
                        <th>Role</th>
                        <th>Skills</th>
                        <th>Display Order</th>
                        <th>Status</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($projects as $project)

                        <tr>

                            <td>{{ $project->id }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$project->thumbnail_image) }}"
                                    width="60"
                                    height="60"
                                    style="object-fit:cover;">
                            </td>

                            <td>{{ $project->title }}</td>
                            <td>{{ $project->project_date }}</td>
                            <td>{{ $project->role }}</td>

                            <td>

                                @foreach($project->skills as $skill)

                                    {{ $skill->name }}

                                    @if(!$loop->last)
                                        ,
                                    @endif

                                @endforeach

                            </td>
                            <td>{{ $project->display_order }}</td>
                            <td>
                                @if($project->status)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Inactive</span>
                                @endif
                            </td>
                             <td>
                                @can('update', $project)
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                @endcan

                                @can('delete', $project)
                                <form action="{{ route('admin.projects.destroy', $project) }}"
                                    method="POST"
                                    style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this project?')">

                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                                @endcan
                            </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
            
            </div>
        </div>
    </div>
</div>

@endsection