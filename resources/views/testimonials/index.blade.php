@extends('layouts.app')

@section('content')
@include('includes.errors')
<div class="container">
        <div class="panel-group">
          <div class="panel panel-danger">
            <div class="panel-heading">Testimonials </div>
            <div class="panel-body">
                    @if(Session::has('created'))
                    <div class="alert alert-success alert-dismissible session">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Thank you for you Testimonial, the Staff have been notifed
                    </div>
                @endif
              <p><b>We love hearing from our parents how they and their children have founds their journey with us. Please feel free to add any comments</b> </p>
            <div class="col-sm-4">
              {!! Form::open(['method'=>'POST', 'action' => 'TestimonialController@store'])!!}
              <div class="form-group">
                  {!! Form::label('name', 'Your name:') !!}
                  {!! Form::text('name', null, ['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                  {!! Form::label('message', 'Your message:') !!}
                  {!! Form::textarea('message', null, ['class'=>'form-control'])!!}
              </div>
              <p>Your Post will be sent for Approval before displaying on this page</p>
              <div class="form-group">
                  {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
              </div>
         {!! Form::close() !!}
         
            </div>

            <div class="col-sm-8">
                <center>
                  <h1>Showing some love:</h1>
                </center>
              <br>
           

                    @foreach($testimonials as $testimonial)
                  
                      <div class="col-5">
                          <center>
                              <p class="testimonial"><b>"</b>{{$testimonial->message}} <b>"</b> </p>
                              <p><b>{{$testimonial->name}}</b>  - posted {{$testimonial->created_at->diffForHumans()}}</p>
                          </center>
                      </div>
                      <br>
                        <center>                          
                            <b>-</b><i class="fa fa-heart" style="color:crimson;"></i><b>-</b>
                        </center>
                      <br>
                     

                    @endforeach
                  
           
            <div>

            </div>
            <center>
                {{ $testimonials->links() }}
            </center>
            </div>
          
            </div>
           
            </div>
          </div>
        </div>
    

@include('includes.copyright')
@endsection