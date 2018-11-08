@extends('layouts.app')

@section('content')

    
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Edit Staff Member</div>
        <div class="panel-body">
            @if(Session::has('created'))

            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Staff Member has been added successfully!
            </div>
        @endif
    
        @if(Session::has('updated'))
            <div class="alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Staff Member has been updated successfully!
            </div>
        @endif
    
        @if(Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Staff Member has deleted successfully!
            </div>
        @endif

        @include('includes.errors')
            
            {!! Form::model($staffs,['method'=>'PATCH', 'action'=> ['StaffController@update', $staffs->id]]) !!}
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

              <div class="row">
              
                    <div class="form-group" style="margin:20px;">
                        {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-3']) !!}
                        {!! Form::close() !!}
                      </div>
                <div class="col-sm-1"></div>
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['StaffController@destroy', $staffs->id]]) !!}
          
                      <div class="form-group" style="margin-right:20px;">
                          {!! Form::submit('Delete Staff', ['class'=>'btn btn-danger col-sm-3']) !!}
                      </div>
                  {!! Form::close() !!}
                <div class="col-sm-1"></div>                  
                  <div class="form-group" style="margin-top:15px;">
                        <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="">Return Home</a>
                      </div>
                   </div> 
                
                  
                
                  
                </div>   
        </div>
  
        {!! Form::close() !!}
              
        </div>
            
      </div>
  </div>


@endsection