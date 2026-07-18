@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Education</h3>
            </div>

        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.educations.create') }}" class="btn btn-primary">
                    Add Education
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
                                <th>Course</th>
                                <th>University</th>
                                <th>Years</th>                       
                                <th>Description</th>
                                <th>Display Order</th>
                                <th>Status</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($educations as $education)
                            <tr>
                                <td>{{ $education->id }}</td>
                                <td>{{ $education->course }}</td>
                                <td>{{ $education->university }}</td>
                                <td>{{ $education->years }}</td>

                                <td>{{ $education->description }}</td>
                                <td>{{ $education->display_order }}</td>
                                <td>{{ $education->status }}</td>
                                <td>
                                    @can('update', $education)
                                    <a href="{{route ('admin.educations.edit', $education->id)}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    @endcan
                                    @can('delete', $education)
                                    <form action="{{ route('admin.educations.destroy', $education->id) }}"
                                            method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this Education?')">

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