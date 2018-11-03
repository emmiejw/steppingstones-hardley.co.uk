@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading"><b>Edit</b> Contact Us</div>
        <div class="panel-body">
          {!! Form::model($contacts['method'=>'PATCH', 'action'=>['ContactController@update', $contacts->id]]) !!}
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
                {!! Form::submit('Save' , ['class'=>'btn btn-primary col-sm-3 ']) !!}

            </center>

    </div>

    {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>


@endsection