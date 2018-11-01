@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading"> <b>Add to</b> About Our Pre-SChool</div>
        <div class="panel-body">
            {!! Form::open(['method'=>'POST', 'action'=> 'AboutController@store']) !!}
            <div class="form-group font-weight-bold">
                {!! Form::label('intro', 'Introduction:') !!}
                {!! Form::textarea('intro', null, ['class'=>'form-control'])!!}

                {!! Form::label('aims', 'Aims and Objectives:') !!}
                {!! Form::textarea('aims', null, ['class'=>'form-control'])!!}

                {!! Form::label('fees', 'Fees:') !!}
                {!! Form::textarea('fees', null,[ "class"=>"form-control"])!!}

                {!! Form::label('funding', 'Funding:') !!}
                {!! Form::textarea('funding', null, ["class"=>"form-control"])!!}

                {!! Form::label('registration', 'Registration:') !!}
                {!! Form::textarea('registration',null, ["class"=>"form-control"])!!}

                {!! Form::label('involvement', 'Parental Involvement:') !!}
                {!! Form::textarea('involvement', null, [ "class"=>"form-control"])!!}

                {!! Form::label('policies', 'Policies:') !!}
                {!! Form::textarea('policies', null, ['class'=>'form-control'])!!}
                <br>
                <center>
                    {!! Form::submit('Save' , ['class'=>'btn btn-primary col-sm-3 ']) !!}

                </center>

        </div>

        {!! Form::close() !!}

        <div class="row">


        </div>

            
      </div>
  </div>


@endsection