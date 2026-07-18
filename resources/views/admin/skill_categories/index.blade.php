@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            
            <div class="card-header">
                <h3 class="card-title">Skill Categories</h3>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <a href="{{ route('admin.skill-categories.create') }}" class="btn btn-primary">
                        Add skill categories
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
                        <th>Category Name</th>
                        <th> Icon </th>
                        <th>Status</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->icon }}</td>
                            <td>{{ $category->status }}</td>
                            <td>
                                @can('update', $category)
                                <a href="{{route ('admin.skill-categories.edit', $category->id)}}" class="btn btn-sm btn-primary">
                                Edit
                                </a>
                                @endcan
                                @can('delete', $category)

                                <form action="{{ route('admin.skill-categories.destroy', $category->id) }}"
                                    method="POST"
                                    style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this Category?')">

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