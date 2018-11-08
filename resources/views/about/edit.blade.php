@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading"> <b>Edit</b> About Our Pre-SChool</div>
        <div class="panel-body">
                @if(Session::has('created'))

                <div class="alert alert-success alert-dismissible session">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <b>'About Page'</b> has been added successfully!
                </div>
            @endif
        
            @if(Session::has('updated'))
                <div class="alert alert-warning alert-dismissible session">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <b>'About Page'</b> has been updated successfully!
                </div>
            @endif
        
@include('includes.errors')
                {!! Form::model($abouts,['method'=>'PATCH', 'action'=> ['AboutController@update', $abouts->id]]) !!}
            <div class="form-group font-weight-bold">
                {!! Form::label('intro', 'Introduction:') !!}
                {!! Form::textarea('intro', null, ['class'=>'form-control textarea'])!!}
                
                {!! Form::label('fees', 'Fees:') !!}
                {!! Form::textarea('fees', null,[ "class"=>"form-control textarea"])!!}

                {!! Form::label('funding', 'Funding:') !!}
                {!! Form::textarea('funding', null, ["class"=>"form-control textarea"])!!}

                {!! Form::label('registration', 'Registration:') !!}
                {!! Form::textarea('registration',null, ["class"=>"form-control textarea"])!!}

                {!! Form::label('involvement', 'Parental Involvement:') !!}
                {!! Form::textarea('involvement', null, [ "class"=>"form-control textarea"])!!}

                {!! Form::label('policies', 'Policies:') !!}
                {!! Form::textarea('policies', null, ['class'=>'form-control textarea'])!!}

                <br>
    
                <center>
                    {!! Form::submit('Update' , ['class'=>'btn btn-primary col-sm-3']) !!}
                    <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="margin-left: 50px;">Return Home</a>
                </center>

        </div>

        {!! Form::close() !!}  
        <br>
        <br>
                
      </div>
      
  </div>


@endsection