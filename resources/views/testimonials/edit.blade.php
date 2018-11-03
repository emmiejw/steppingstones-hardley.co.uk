@extends('layouts.app')

@section('content')
<div class="container">
        <div class="panel-group">
          <div class="panel panel-danger">
            <div class="panel-heading">Testimonials </div>
            <div class="panel-body">
                <p>Please look below for the current notifications and whether the Testimnoial is Approved and visible on the page</p>
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
                                            {!! Form::submit('Click to un-approve', ['class'=>'btn btn-success']) !!}
                                        </div>
                                {!! Form::close() !!}
                        
                                @else
                    
                                {!! Form::open(['method'=>'PATCH', 'action'=> ['TestimonialController@update', $testimonial->id]]) !!}
            
                                <input type="hidden" name="is_active" value="1">

                                <div class="form-group">
                                    {!! Form::submit('Click to Approve', ['class'=>'btn btn-info']) !!}
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
              </table>
            </div>
            </div>
          </div>
        </div>
    


@endsection