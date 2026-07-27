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

                <form action="{{ route('admin.projects.update', $project) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @include('admin.projects._form')

                    <br>

                    <button class="btn btn-primary">
                        Update Project
                    </button>

                    <a href="{{ route('admin.projects.index') }}"
                       class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection