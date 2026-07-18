@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            
            <div class="card-header">
                <h3 class="card-title">Services</h3>
            </div>

            <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                    Add Service
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
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Discription</th>
                                <th>Status</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->icon }}</td>
                                <td>{{ $service->title }}</td> 
                                <td>{{ $service->discription }}</td>                               
                                <td>{{ $service->status }}</td>
                                <td>
                                    @can('update', $service)
                                    <a href="{{route ('admin.services.edit', $service->id)}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    @endcan
                                    @can('delete', $service)
                                    <form action="{{ route('admin.services.destroy', $service->id) }}"
                                            method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this service?')">

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