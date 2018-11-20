@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
      <img src="{{$mainpage->photo_1}}" style="width:100%">
          <div class="caption">
          <p>{{$mainpage->caption_1}}</p>
          </div>
        </a>
      <a href="{{route('main.edit', $mainpage->id)}}"><i class="far fa-star" style="float:right;"></i></a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        {{-- <a href="/images/IMG_2684.JPG" target="_blank"> --}}
        <img src="{{$mainpage->photo_2}}" style="width:100%">
          <div class="caption">
          <p>{{$mainpage->caption_2}}</p>
          </div>
        </a>
      <a href="{{route('main.edit', $mainpage->id)}}"><i class="far fa-star" style="float:right;"></i></a>

      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
      <img src="{{$mainpage->photo_3}}" style="width:100%;">
          <div class="caption">
          <p>{{$mainpage->caption_3}}</p>
          </div>
        </a>
      </div>
      <a href="{{route('main.edit', $mainpage->id)}}"><i class="far fa-star" style="float:right;"></i></a>

    </div>
  </div>
</div>
  
@include('includes.copyright')

@endsection