@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        {{-- <a href="/images/IMG_2677.JPG" target="_blank"> --}}
          <img src="/images/IMG_2677.JPG" style="width:100%">
          <div class="caption">
            <p>Lunchtimes, where the children get to chill and enjoy their lunch with Toyah the Deputy Manager</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        {{-- <a href="/images/IMG_2684.JPG" target="_blank"> --}}
          <img src="/images/IMG_2684.JPG" style="width:100%">
          <div class="caption">
            <p>We love dressing up just as much as the children!! </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        {{-- <a href="/images/IMG_2686.JPG" target="_blank"> --}}
          <img src="/images/IMG_2901.JPG" style="width:100%;">
          <div class="caption">
            <p>We share a natural trail with Manor Farm Infant School. The children enjoy exploring natural as well as spooky walks for halloween and easter egg hunts in spring</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
  
@include('includes.copyright')

@endsection