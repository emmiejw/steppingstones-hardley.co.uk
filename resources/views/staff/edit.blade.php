@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Edit Staff Member</div>
        <div class="panel-body">
          <p>Select a Staff Member to Edit via the arrows:</p>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{url('staff/8/edit')}}">Manager</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/9/edit')}}">Deputy Manager</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/10/edit')}}">EYP 1</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/11/edit')}}">EYP 2</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/12/edit')}}">EYP 3</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/13/edit')}}">EYP 4</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/14/edit')}}">EYP 5</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/15/edit')}}">EYP 6</a></li>
              <li class="page-item"><a class="page-link" href="{{url('staff/16/edit')}}">EYP 7</a></li>
            
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
                <center>
                    {!! Form::submit('Update' , ['class'=>'btn btn-primary col-sm-3 ']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {!! Form::submit('Delete' , ['class'=>'btn btn-danger col-sm-3', 'style'=>"margin-left: 50px;"]) !!}
                    
                    {{-- <a href="{{ route('staff.destroy', ['id' => $staff->id]) }}" class="btn btn-danger col-sm-3" style="margin-left: 50px;">Delete</a> --}}
                    <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="margin-left: 50px;">Return Home</a>
                </center>
  
        </div>
  
        {!! Form::close() !!}
              
        </div>
            
      </div>
  </div>


@endsection