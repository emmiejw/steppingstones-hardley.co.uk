@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">About Our Pre-SChool</div>
        <div class="panel-body">
            <h3>Introduction</h3>
            @foreach ($abouts as $about)
              <p>{{$about->intro}}</p>
              <h3>AIMS AND OBJECTIVES</h3>
              <p>
                  Our aim is for each child to gain confidence, and independence, and to learn through play. To achieve our aim Stepping Stones Pre-school will provide:
                      <ul>
                          <li>A specially tailored curriculum chosen to meet the EYFS (Early Years Foundation Stage)</li>
                          <li>Individual care and attention made possible by a high ratio of adults to children</li>
                          <li>Fun and friendship with children and other adults which will develop their social interaction Skills</li>
                          <li>The support of a personal key person</li>
                          <li>Opportunities for parents and other family members to be directly involved in the activities of the group Regular feedback on your child’s Progress and development</li>
                          <li>Regular feedback on your child's progress and development</li>
                      </ul>
              </p>
              <h3>TIMES AND HOURS</h3>
              <p>
                  Stepping Stones Pre-School is registered for full day care and is open from 8.30am until 4.00pm Monday to Friday at the following times: (school term time only)
              </p>
              <div style="overflow-x:auto;">
                  <table class="table_1">
                      <tr>
                          <th>Optional Extra</th>
                          <th tcolor>Main Session</th>
                          <th>Lunchtime</th>
                          <th tcolor>Main Session</th>
                          <th>Optional Extra</th>
                          <th>Optional Extra</th>
                      </tr>
                      <tr>
                          <td>8:30 - 9:00</td>
                          <td tcolor >9:00 - 11:30</td>
                          <td>11:30 - 12:30</td>
                          <td tcolor>12:30 -15:00</td>
                          <td>15:00 - 15:30</td>
                          <td>15:30 - 16:00</td>
                      </tr>
                      <tr>
                          <td>0.5 hrs</td>
                          <td>2.5 hrs</td>
                          <td>1 hr</td>
                          <td>2.5 hrs</td>
                          <td>0.5 hrs</td>
                          <td>0.5 hrs</td>
                      
                      </tr>
                  </table>
              </div>
              <h3>FEES</h3>
                <p>{{$about->fees}}</p>
                <h3>GOVERNMENT FUNDING</h3>
                <p>{{$about->funding}}</p>  
                <h3>REGISTRATION FEE</h3>
                <p>{{$about->registration}}</p>
                <h3>THE PRE-SCHOOL AND PARENTAL INVOLVEMENT</h3>
                <p>{{$about->involvement}}</p>
                <h3>POLICIES</h3>
                <p>{{$about->policies}}</p>
              @endforeach
      </div>
      <center>    
          <button class="btn btn-warning">
                  <li><a href="/about">Back to the Top of the Page</a></li>
          </button>
      </center> 
      <br>  
  </div>


@endsection