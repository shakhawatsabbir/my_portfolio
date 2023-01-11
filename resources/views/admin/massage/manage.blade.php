@extends('admin.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Massage</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Manage Massage</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Massage Table
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Massage</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($massages as $massage)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$massage->name}}</td>
                            <td>{{$massage->email}}</td>
                            <td>{{$massage->massage}}</td>
                            <td>{{$massage->status == 1 ? 'Active' : 'Inactive'}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
