@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="panel panel-success">
                        <div class="panel-heading">Stepping Stones News</div>
                        <div class="panel-body">
                            <div class="panel-group">
                                {!! Form::open(['method'=>'POST', 'action' => 'HomeController@store'])!!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Title:') !!}
                                    {!! Form::text('title', null, ['class'=>'form-control'])!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('post', 'Post:') !!}
                                    {!! Form::textarea('post', null, ['class'=>'form-control'])!!}
                                </div>
                                <div class="form-group">
                                        {!! Form::label('file', 'Attachment:') !!}
                                        {!! Form::file('file', null, ['class'=>'form-control'])!!}
                                    </div>
                                <div class="form-group">
                                    {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}

                            <div class="col-sm-8">
                                    <center>
                                      <h1>Previous posts</h1>
                                    </center>
                                  <br>
                            
                    
                                        @foreach($posts as $post)
                                      
                                          <div class="col-5">
                                              <center>
                                                  <p > {{$post->title}} </p>
                                                  <img src="{{$post->file}}" alt="">
                                                  <p><b>{{$post->post}}</b>  - posted on {{$post->created_at->diffForHumans()}}</p>
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
                                    {{ $posts->links() }}
                                </center>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                
                
                
                
                
                

               