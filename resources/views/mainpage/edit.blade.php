@extends('layouts.app')

@section('content')

    
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Edit Main Page</div>
        <div class="panel-body">
            
    
        @if(Session::has('updated'))
            <div class="alert alert-warning alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Main Page has been updated successfully!
            </div>
        @endif
    
        @if(Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Main Page has deleted successfully!
            </div>
        @endif

        @include('includes.errors')
            
            {!! Form::model($mainpages,['method'=>'PATCH', 'action'=> ['SteppingstonesController@update', $mainpages->id]]) !!}
            <div class="form-group font-weight-bold">
                    {!! Form::label('photo_1', 'Photo One:') !!}
                    {!! Form::file('photo_1', null, ['class'=>'form-control'])!!}
      
                    {!! Form::label('caption_1', 'Caption One:') !!}
                    {!! Form::text('caption_1', null, ['class'=>'form-control'])!!}
                    <br>
                    <div class="row">
                            
                            <div class="col-sm-7">  
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['SteppingstonesController@destroy', $mainpages->id]]) !!}
                        
                                    <div class="form-group">
                                        {!! Form::submit('Delete Photo & Caption', ['class'=>'btn btn-danger col-sm-3']) !!}
                                    </div>
                                {!! Form::close() !!}
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="">Return Home</a>
                                </div>
                            </div>
                         
                          </div>
              
            
                
                 
                
                  
                
                  
                </div>   
        </div>
  
        {!! Form::close() !!}
              
        </div>
            
      </div>
  </div>


@endsection