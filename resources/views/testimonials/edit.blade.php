@extends('layouts.app')

@section('content')
<div class="container">
        
        <div class="panel-group">
          <div class="panel panel-danger">
            <div class="panel-heading">Testimonials </div>
            <div class="panel-body">
                    @if(Session::has('updated'))
                    <div class="alert alert-warning alert-dismissible session">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong>Testimonial has been Approved successfully!
                    </div>
                @endif
                @if(Session::has('deleted'))
            <div class="alert alert-danger alert-dismissible session">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Testimonial has deleted successfully!
            </div>
        @endif
                <p>Please look below for the current notifications and whether the Testimnoial is Approved and visible on the page</p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <thead>
                        <th>Parent's name</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </thead>
                </tr>
                <tr>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->message}}</td>
                        <td>
                            @if($testimonial->is_active == 1)
        
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['TestimonialController@update', $testimonial->id]]) !!}

                                <input type="hidden" name="is_active" value="0">
        
                                        <div class="form-group">
                                            {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                                        </div>
                                {!! Form::close() !!}
                        
                                @else
                    
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['TestimonialController@update', $testimonial->id]]) !!}
            
                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">
                                    {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                                </div>
                                {!! Form::close() !!}
        
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['TestimonialController@destroy', $testimonial->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach   
                </tbody> 
                <center>
                    {{ $testimonials->links() }}
                </center>
              </table>
            </div>
              <center>
                <a href="{{ URL::route('home') }}" class="btn btn-info col-sm-3" style="margin-left: 50px;">Return Home</a>
            </center>
            </div>
            
            </div>
          </div>
        </div>
    


@endsection