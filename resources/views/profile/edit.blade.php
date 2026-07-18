@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card mt-4">

                <div class="card-header">
                    <h3 class="card-title">
                        Profile
                    </h3>
                </div>


                <div class="card-body">

                    <div class="mb-3">
                        <label class="font-weight-bold">
                            Name
                        </label>

                        <p class="form-control">
                            {{ Auth::user()->name }}
                        </p>
                    </div>


                    <div class="mb-3">

                        <label class="font-weight-bold">
                            Email
                        </label>

                        <p class="form-control">
                            {{ Auth::user()->email }}
                        </p>

                    </div>


                </div>

            </div>

        </div>

    </div>

</div>

@endsection