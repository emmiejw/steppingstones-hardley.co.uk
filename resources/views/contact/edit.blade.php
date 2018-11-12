@extends('layouts.app')

@section('content')
@if(Session::has('updated'))
                <div class="alert alert-warning alert-dismissible session">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <b>'Contact Page'</b> has been updated successfully!
                </div>
            @endif
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading"><b>Edit</b> Contact Us</div>
        <div class="panel-body">
          {!! Form::model($contacts,['method'=>'PATCH', 'action'=> ['ContactController@update', $contacts->id]]) !!}
          <div class="form-group font-weight-bold">
            {!! Form::label('address_1', 'First line of Address:') !!}
            {!! Form::text('address_1', null, ['class'=>'form-control'])!!}

            {!! Form::label('address_2', 'Second line of Address:') !!}
            {!! Form::text('address_2', null, ['class'=>'form-control'])!!}

            {!! Form::label('City', 'City:') !!}
            {!! Form::text('City', null, ["class"=>"form-control"])!!}

            {!! Form::label('postcode', 'Post Code:') !!}
            {!! Form::text('postcode',null, ["class"=>"form-control"])!!}

            {!! Form::label('phone', 'Phone Number:') !!}
            {!! Form::text('phone', null, [ "class"=>"form-control"])!!}

            {!! Form::label('email', 'Email Address:') !!}
            {!! Form::text('email', null, ['class'=>'form-control'])!!}
            <br>
            <center>
              {!! Form::submit('Update' , ['class'=>'btn btn-primary col-sm-3']) !!}
              <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="margin-left: 50px;">Return Home</a>
          </center>

    </div>

    {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


@endsection