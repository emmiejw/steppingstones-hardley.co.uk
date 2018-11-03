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
          <p>Select a Staff Member to Edit via the arrows:</p>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{url('staff/1/edit')}}">Manager</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/2/edit')}}">Deputy Manager</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/3/edit')}}">EYP 1</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/4/edit')}}">EYP 2</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/5/edit')}}">EYP 3</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/6/edit')}}">EYP 4</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/7/edit')}}">EYP 5</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/8/edit')}}">EYP 6</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/9/edit')}}">EYP 7</a></li>
            
            </ul>
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
                <div class="col-4">
                    <div class="form-group" style="margin-top:20px;">
                        {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-3']) !!}
                        {!! Form::close() !!}
                      </div>
                </div>
                 <div class="col-4">
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['StaffController@destroy', $staffs->id]]) !!}
          
                      <div class="form-group" style="">
                          {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-3']) !!}
                      </div>
                  {!! Form::close() !!}
                   </div> 
                <div class="col-4">
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