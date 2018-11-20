@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
          @include('includes.errors')
        <div class="panel-heading">Create Main Page</div>
        <div class="panel-body">
          <p>Add Main page section</p>
          @if(Session::has('created'))

            <div class="alert alert-success alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Main page section has been added successfully!
            </div>
        @endif
          {!! Form::open(['method'=>'post', 'action'=>'SteppingstonesController@store','files'=>true]) !!}
          <div class="form-group font-weight-bold">

              {!! Form::label('photo_1', 'Photo One:') !!}
              {!! Form::file('photo_1', null, ['class'=>'form-control'])!!}

              {!! Form::label('caption_1', 'Caption One:') !!}
              {!! Form::text('caption_1', null, ['class'=>'form-control'])!!}
              <br>
            
              <center>
                {!! Form::submit('Save' , ['class'=>'btn btn-primary col-sm-3']) !!}
                <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="margin-left: 50px;">Return Home</a>
            </center>

      </div>

      {!! Form::close() !!}

            
      </div>
  </div>


@endsection