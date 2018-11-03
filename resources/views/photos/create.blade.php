@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading"> <b>Add to</b> Photo Gallery</div>
        <div class="panel-body">
            {!! Form::open(['method'=>'post', 'action'=>'PhotosController@store','files'=>true]) !!}
            <div class="form-group font-weight-bold">
                 
                {!! Form::label('photo', 'Upload a Photo:') !!}
                {!! Form::file('photo', null, ['class'=>'form-control'])!!}
                    <br>
                <center>
                    {!! Form::submit('Save' , ['class'=>'btn btn-primary col-sm-3 ']) !!}
  
                </center>
  
        </div>
  
        {!! Form::close() !!}
            
      </div>
  </div>


@endsection