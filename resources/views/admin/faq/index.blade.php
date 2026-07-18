@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            
            <div class="card-header">
                <h3 class="card-title">FAQ</h3>
            </div>

            <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
                    Add FAQ
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
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th width="170">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $faq->id }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>{{ $faq->answer }}</td>                               
                                <td>{{ $faq->status }}</td>
                                <td>
                                    <a href="{{route ('admin.faqs.edit', $faq->id)}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.faqs.destroy', $faq->id) }}"
                                            method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this FAQ?')">

                                                <i class="fas fa-trash"></i>
                                            </button>

                                        </form>

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