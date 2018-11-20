@extends('layouts.app')

@section('content')
<div class="row">
  @foreach ($mainpages as $mainpage)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{$mainpage->photo_1}}" style="width:100%; height:75%">
        <div class="caption">
          <p>{{$mainpage->caption_1}}</p>
             <a href="{{route('main.edit', $mainpage->id)}}"><i class="far fa-star" style="float:right;"></i></a>
              <br>
        </div>
      </a>
      </div>
    </div>
@endforeach
</div>
@include('includes.copyright')

@endsection