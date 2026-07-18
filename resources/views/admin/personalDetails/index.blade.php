@extends('admin.layouts.app')

@section('content')
@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Personal Details</h3>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Years of Experience</th>
                            <th>Profile Image</th>
                            <th>Resume File</th>
                            <th>LinkedIn Url</th>
                            <th>Github Url</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($details as $detail)

                        <tr>
                            <td>{{ $detail->id }}</td>
                            <td>{{ $detail->name }}</td>
                            <td>{{ $detail->title }}</td>
                            <td>{{ $detail->mobile }}</td>
                            <td>{{ $detail->email }}</td>
                            <td>{{ $detail->address }}</td>
                            <td>{{ $detail->years_of_experience }}</td>
                            <td>{{ $detail->profile_image }}</td>
                            <td>{{ $detail->resume_file }}</td>
                            <td>{{ $detail->linkedin_url }}</td>
                            <td>{{ $detail->github_url }}</td>
                            <td>
                                <a href="{{ route('admin.personalDetails.edit',$detail->id) }}"
                                   class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>
</div>

@endsection

@endsection