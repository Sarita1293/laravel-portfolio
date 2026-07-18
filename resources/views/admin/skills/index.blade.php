@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            
            <div class="card-header">
                <h3 class="card-title">Skills</h3>
            </div>

            <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.skills.create') }}" class="btn btn-primary">
                    Add Skill
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
                                <th>Skill Category Id</th>
                                <th>Name</th>
                                <th>Percentage</th>
                                <th>Dispaly Order</th>
                                <th>Status</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                            <tr>
                                <td>{{ $skill->id }}</td>
                                <td>{{ $skill->skill_category_id }}</td>
                                <td>{{ $skill->name }}</td> 
                                <td>{{ $skill->percentage }}</td> 
                                <td>{{ $skill->display_order }}</td>                              
                                <td>{{ $skill->status }}</td>
                                <td>
                                    @can('update', $skill)
                                    <a href="{{route ('admin.skills.edit', $skill->id)}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    @endcan
                                    @can('delete', $skill)
                                    <form action="{{ route('admin.skills.destroy', $skill->id) }}"
                                            method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this skill?')">

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