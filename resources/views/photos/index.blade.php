@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Photo Gallery</div>
        <div class="panel-body">
            <section id="photos">
                @foreach ($photos as $photo)
            <img src="/{{$photo->photo}}" style="width:100%">
                @endforeach
               
               </section> 
               <h2>Please do contact us if you would like to come and see us and experience what we do first hand</h2>    
            </div>
        </div>
            
      </div>
  </div>


@endsection