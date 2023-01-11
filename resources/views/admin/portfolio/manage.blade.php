@extends('admin.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Portfolio</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manage Portfolio</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Portfolio
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Tools Used</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$portfolio->portfolio_title}}</td>
                            <td>{{$portfolio->portfolio_tools}}</td>
                            <td>{{$portfolio->portfolio_description}}</td>
                            <td>{{$portfolio->link}}</td>
                            <td>
                                <img src="{{asset($portfolio->image)}}" alt="" height="50" width="50">
                            </td>
                            <td>{{$portfolio->status == 1 ? 'Active' : 'Inactive'}}</td>
                            <td>
                                <div class="d-flex" >
                                    <a href="{{route('edit',['id'=>$portfolio->id])}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{route('delete')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="portfolio_id" value="{{$portfolio->id}}">
                                        <button type="submit" class="btn btn-sm btn-danger ms-3 ">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
