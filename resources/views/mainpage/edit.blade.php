@extends('layouts.app')

@section('content')

    
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Edit Main Page - Photo Caption</div>
        <div class="panel-body">
            
    
        @if(Session::has('updated'))
            <div class="alert alert-warning alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Photo caption has been updated successfully!
            </div>
        @endif
    
        @if(Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Photo & caption has deleted successfully!
            </div>
        @endif

        @include('includes.errors')
            
            {!! Form::model($mainpages,['method'=>'PATCH', 'action'=> ['SteppingstonesController@update', $mainpages->id]]) !!}
            <div class="form-group font-weight-bold">
                    {{-- {!! Form::label('photo_1', 'Photo One:') !!}
                    {!! Form::file('photo_1', null, ['class'=>'form-control'])!!}
       --}}
                    {!! Form::label('caption_1', 'Caption One:') !!}
                    {!! Form::text('caption_1', null, ['class'=>'form-control'])!!}
                    <br>
                    <div class="row">
              
                        <div class="form-group" style="margin:20px;">
                            {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-3']) !!}
                            {!! Form::close() !!}
                          </div>
                    <div class="col-sm-1"></div>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['SteppingstonesController@destroy', $mainpages->id]]) !!}
              
                          <div class="form-group" style="margin-right:20px;">
                              {!! Form::submit('Delete Photo & Caption', ['class'=>'btn btn-danger col-sm-3']) !!}
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