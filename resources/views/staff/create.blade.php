@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Add a staff member</div>
        <div class="panel-body">
          <p>Add a Staff Member</p>
          @if(Session::has('created'))

            <div class="alert alert-success alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Staff Member has been added successfully!
            </div>
        @endif
          {!! Form::open(['method'=>'post', 'action'=>'StaffController@store','files'=>true]) !!}
          <div class="form-group font-weight-bold">
              {!! Form::label('name', 'Name:') !!}
              {!! Form::text('name', null, ['class'=>'form-control'])!!}

              {!! Form::label('role', 'Role:') !!}
              {!! Form::text('role', null, ['class'=>'form-control'])!!}

              {!! Form::label('qualifications_1', 'Qualification One:') !!}
              {!! Form::text('qualifications_1', null,[ "class"=>"form-control"])!!}

              {!! Form::label('qualifications_2', 'Qualification Two:') !!}
              {!! Form::text('qualifications_2', null,[ "class"=>"form-control"])!!}

              {!! Form::label('qualifications_3', 'Qualification Three:') !!}
              {!! Form::text('qualifications_3', null,[ "class"=>"form-control"])!!}

              {!! Form::label('aboutMe', 'A little bit about Me:') !!}
              {!! Form::textarea('aboutMe', null, [ "class"=>"form-control"])!!}

              {!! Form::label('photo', 'Photo:') !!}
              {!! Form::file('photo', null, ['class'=>'form-control'])!!}
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