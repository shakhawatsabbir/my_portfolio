@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-3 mb-3">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Portfolio</h3></div>
                    <div class="card-body">
                        <form action="{{route('update.portfolio')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$portfolio->id}}" name="portfolio_id">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputTitle" type="text" name="portfolio_title" value="{{$portfolio->portfolio_title}}" />
                                <label for="inputTitle">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputToolsUsed" type="text" name="portfolio_tools"  value="{{$portfolio->portfolio_tools}}" />
                                <label for="inputToolsUsed">Tools Used</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control " rows="5" id="inputDescription" type="text" name="portfolio_description" >{{$portfolio->portfolio_description}}</textarea>
                                <label for="inputDescription">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputLink" type="text" name="link" value="{{$portfolio->link}}">
                                <label for="inputLink">Link</label>
                            </div>
                            <div class=" mb-3">
                                <input class="form-control" id="inputImage" name="image" type="file"/>
                                <label for="inputImage"></label>
                                <img src="{{asset($portfolio->image)}}" alt="" height="120" width="200">
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Update Portfolio</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
