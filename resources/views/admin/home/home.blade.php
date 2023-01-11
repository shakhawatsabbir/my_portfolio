@extends('admin.master')

@section('content')
    <div class="container-fluid px-4">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body d-flex">
                            <h5>Portfolio</h5>
                            <h5 class=" ps-2 text-warning">{{count($portfolio)}}</h5>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text text-decoration-none " href="{{route('manage.portfolio')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body d-flex">
                            <h5>Massage</h5>
                            <h5 class=" ps-2 text-warning">{{count($massages)}}</h5>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link text text-decoration-none " href="{{route('manage.massage')}}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Live Portfolio
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped" >
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$portfolio->portfolio_title}}</td>
                                        <td><img src="{{$portfolio->image}}" alt="" height="40" width="30"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Recent Massage
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped" >
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($recentMassages as $massage)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{substr($massage->name,0,13)}}...</td>
                                    <td>{{$massage->email}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
