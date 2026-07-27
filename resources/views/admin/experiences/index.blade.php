@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Experience</h3>
            </div>

            <div class="card-body">
                <div class="mb-3">
                <a href="{{ route('admin.experiences.create') }}" class="btn btn-primary">
                    Add Experience
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
                        <th>Comapany Name</th>
                        <th>Designation</th>
                        <th>Project Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Description</th>
                        <th>Roles and Responsibilities</th>
                        <th>Currently Working</th>
                        <th>Location</th>
                        <th>Display Order</th>
                        <th>Status</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($experiences as $experience)
                    <tr>

                            <td>{{ $experience->id }}</td>
                            <td>{{ $experience->company_name }}</td>
                            <td>{{ $experience->designation }}</td>
                            <td>{{ $experience->project_name }}</td>
                            <td>{{ $experience->start_date }}</td>
                            <td>{{ $experience->end_date }}</td>
                            <td>{{ $experience->description }}</td>
                            <td>{{ $experience->roles_and_responsibilities }}</td>
                            <td>{{ $experience->currently_working }}</td>
                            <td>{{ $experience->location }}</td>
                            <td>{{ $experience->display_order }}</td>
                            <td>{{ $experience->status }}</td>
                            <td>
                                @can('update', $experience)
                                <a href="{{route ('admin.experiences.edit', $experience->id)}}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                @endcan
                                @can('delete', $experience)
                               <form action="{{ route('admin.experiences.destroy', $experience->id) }}"
                                    method="POST"
                                    style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this Experience?')">

                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            
                            @endcan</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        
            </div>
        </div>
    </div>
</div>

@endsection