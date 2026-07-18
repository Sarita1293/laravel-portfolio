@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Current Learning</h3>
            </div>

        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.currentLearnings.create') }}" class="btn btn-primary">
                    Add Current Learning
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
                                <th>Logo</th>
                                <th>Title</th>                      
                                <th>Description</th>              
                                <th>Status</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($currentLearnings as $currentLearning)
                            <tr>
                                <td>{{ $currentLearning->id }}</td>
                                <td>{{ $currentLearning->logo }}</td>
                                <td>{{ $currentLearning->title }}</td>
                                <td>{{ $currentLearning->description }}</td>
                                <td>{{ $currentLearning->status }}</td>
                                <td>
                                    @can('update', $currentLearning)
                                    <a href="{{route ('admin.currentLearnings.edit', $currentLearning->id)}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    @endcan
                                    @can('delete', $currentLearning)
                                    <form action="{{ route('admin.currentLearnings.destroy', $currentLearning->id) }}"
                                            method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this currentLearning?')">

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