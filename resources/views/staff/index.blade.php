@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Our Staff</div>
        <div class="panel-body">
            <p>We are proud of the high ratio of adults to children in our group. This ensures individual attention to the needs and development of each child.</p> <br>
            <br>
            <p>The regular staff members in the group are:</p>
            <br>
            @foreach ($staffs as $staff)
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="col-sm-5">
                      <center>
                        <img height="200" width="250" src="{{$staff->photo}}" alt="" class="staff_photo">
                      </center>
                      </div>
                            <div class="col-sm-7">
                            <p><b>{{$staff->name}}</b> - {{$staff->role}}</p>
                                <p><b>Qualifications</b>: 
                                  <br>
                                {{$staff->qualifications_1}}
                                <br>
                                {{$staff->qualifications_2}}
                                <br>
                                {{$staff->qualifications_3}}
                              <p><b>What I love about Stepping Stones</b>: {{$staff->aboutMe}}</p>
                              <a href="{{route('staff.edit', $staff->id)}}"><i class="far fa-star" style="float:right;"></i></a>
                            </div>
                          </div>      
                      </div>
              @endforeach
      </div>
  </div>


@endsection