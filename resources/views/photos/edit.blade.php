@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading"><b>Edit</b> Photo Gallery</div>
        <div class="panel-body">
            @if(Session::has('created'))
            <div class="alert alert-success alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> The photo you uploaded has been added to the Photo Gallery successfully!
            </div>
        @endif

        @if(Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> The photo you selected has been deleted successfully!
            </div>
        @endif
          <p>Please upload a photo to the Photo Gallery</p>
          <br>
          @include('includes.errors')
          <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
                  {!! Form::open(['method'=>'post', 'action'=>'PhotosController@store','files'=>true]) !!}
                  <div class="form-group font-weight-bold">
                       
                      {!! Form::label('photo', 'Upload a Photo:') !!}
                      {!! Form::file('photo', null, ['class'=>'form-control'])!!}
                          <br>
                          <center>
                            {!! Form::submit('Upload' , ['class'=>'btn btn-primary col-sm-3']) !!}
                            <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="margin-left: 50px;">Return Home</a>
                        </center>
              </div>
              {!! Form::close() !!}
              </div>
              <div class="col-sm-3"></div>
            </div>
         <br>
         <p>Please click on the Delete Photo button to remove it from the Photo Gallery</p>
         <br> 
         <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <table class="table-striped .table-hover">
                        <thead>
                          <tr>
                            <th class="col-sm-3">Photo</th>
                            <th class="col-sm-3">Delete</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($photos as $photo)
                              <tr>
                                <td><img src="/{{$photo->photo}}" style="width:200px; height:200px;"></td>
                                <td>
                                    <div class="col-3">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['PhotosController@destroy', $photo->id]]) !!}
                              
                                          <div class="form-group" style="">
                                              {!! Form::submit('Delete Photo', ['class'=>'btn btn-danger col-sm-6']) !!}
                                          </div>
                                      {!! Form::close() !!}
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="col-sm-3"></div>
              </div>
            <center>
                {{ $photos->links() }}
            </center>   
        </div>
      </div>
    </div>
</div> 


@endsection

