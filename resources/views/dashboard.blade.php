@extends('admin.layouts.app')

@section('content')


        <div class="container-fluid">
            <h1>Dashboard</h1>
        </div>


            <!-- Statistics Cards -->
            <div class="row">

                <!-- Projects -->
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">

                        <div class="inner">
                            <h3>{{ $projectsCount }}</h3>

                            <p>Projects</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>

                    </div>

                </div>


                <!-- Skills -->
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">

                        <div class="inner">
                            <h3>{{ $skillsCount }}</h3>

                            <p>Skills</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-code"></i>
                        </div>

                    </div>

                </div>


                <!-- Experience -->
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">

                        <div class="inner">
                            <h3>{{ $experienceCount }}</h3>

                            <p>Experience</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-briefcase"></i>
                        </div>

                    </div>

                </div>


                <!-- Total Downloads -->
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">

                        <div class="inner">
                            <h3>{{ $totalDownloads }}</h3>

                            <p>Resume Downloads</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-file-download"></i>
                        </div>

                    </div>

                </div>


            </div>

            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $todayVisitors }}</h3>
                            <p>Today's Visitors</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $monthlyVisitors }}</h3>
                            <p>Monthly Visitors</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $totalVisitors }}</h3>
                            <p>Total Visitors</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>

                </div>
            <!-- Resume Analytics -->
            <!-- <div class="row"> -->

                <!-- Today's Downloads -->

                <!-- <div class="col-md-4">

                    <div class="small-box bg-primary">

                        <div class="inner">

                            <h3>
                                {{ $todayDownloads }}
                            </h3>

                            <p>
                                Today's Resume Downloads
                            </p>

                        </div>

                        <div class="icon">
                            <i class="fas fa-download"></i>
                        </div>

                    </div>

                </div> -->

                <!-- Total Downloads -->

                <!-- <div class="col-md-4">

                    <div class="small-box bg-success">

                        <div class="inner">

                            <h3>
                                {{ $totalDownloads }}
                            </h3>

                            <p>
                                Total Resume Downloads
                            </p>

                        </div>

                        <div class="icon">
                            <i class="fas fa-file-download"></i>
                        </div>

                    </div>

                </div> -->

                <!-- Latest Download -->

                <!-- <div class="col-md-4">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">
                                Latest Download
                            </h3>

                        </div>


                        <div class="card-body">

                            @if($latestDownload)

                                <p>
                                    <b>IP:</b>
                                    {{ $latestDownload->ip_address }}
                                </p>


                                <p>
                                    <b>Date:</b>
                                    {{ $latestDownload->downloaded_at }}
                                </p>


                            @else

                                <p>
                                    No downloads yet.
                                </p>

                            @endif

                        </div>

                    </div>

                </div> -->
            <!-- </div> -->

<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            Latest Resume Downloads
        </h3>
    </div>


    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>#</th>
                    <th>IP Address</th>
                    <th>Device</th>
                    <th>Browser</th>
                    <th>Opertaing System</th>
                    <th>Date</th>
                </tr>

            </thead>


            <tbody>

            @foreach($latestDownloads as $download)

                <tr>

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $download->ip_address }}
                    </td>

                    
                    <td>
                        {{ $download->device }}
                    </td>
                    <td>
                        {{ $download->browser }}
                    </td>
                    <td>
                        {{ $download->operating_system }}
                    </td>

                    <td>
                        {{ $download->downloaded_at }}
                    </td>

                </tr>

            @endforeach


            </tbody>


        </table>


    </div>

</div>

<div class="card">

<div class="card-header">
    <h3 class="card-title">
        Latest Visitors
    </h3>
</div>


<div class="card-body">

<table class="table table-bordered table-striped">

<thead>
<tr>
<th>#</th>
<th>IP Address</th>
<th>Device</th>
<th>Browser</th>
<th>Page</th>
<th>Date</th>
</tr>
</thead>


<tbody>

@foreach($latestVisitors as $visitor)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $visitor->ip_address }}</td>

<td>{{ $visitor->device }}</td>

<td>{{ $visitor->browser }}</td>

<td>{{ $visitor->page }}</td>

<td>
{{ $visitor->created_at->format('d M Y h:i A') }}
</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>


@endsection