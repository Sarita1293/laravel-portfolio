@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Edit Skill Category</h3>
                <a href="{{ route('admin.skill-categories.index') }}" class="btn btn-secondary btn-sm ml-auto">
                 Back
                </a>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.skill-categories.update', $skill_category->id) }}" method="POST">

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

                     @include('admin.skill_categories._form')

                    <br>

                    <button class="btn btn-primary">
                        Save Service
                    </button>
                    <a href="{{ route('admin.skill-categories.index') }}" class="btn btn-secondary">
                        Cancel
                    </a>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection