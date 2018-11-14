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
                <H3>THE MANAGEMENT OF OUR SETTING</H3>
                <p>Stepping Stones Pre-school is overseen by a parent management committee - whose members are elected by the parents of the children who attend the setting. The elections take place at our Annual General Meeting. The committee is responsible for overseeing: <br>
                        The management of the setting’s finances; <br>
                        The employment and management of staff;<br>
                        That the setting has, and works to, policies that help it to provide a high quality service; <br>
                        That the setting works in partnership with the children and the children's parents/carer’s. <br>
                        The Annual General Meeting is open to the parents/carers of all of the children who attend the setting. It is our shared forum for looking back over the previous year’s activities and shaping the coming year’s plan. The committee consists of a maximum of nine elected members and three co-opted members, including three officers — Chairperson, Secretary and Treasurer. Our pre-school cannot run without elected officers and members, therefore, if you would like to have your say in how the pre-school is mm and are interested in becoming a committee member, please speak to a member of staff and they will put you in touch with the current chairperson. <br>
                        We at Stepping Stones truly believe and endorse that play is vital for the healthy all round development of under 5’s and want your child to enjoy their time spent with us.</p>
                <h3>POLICIES</h3>
                <p>{{$about->policies}}</p>                               
              @endforeach
              <ul>
              <li><a href="{{ asset('policies/Ticks.pdf')}}">Download Ticks PDF</a></li>
              <li><a href="{{ asset('policies/ECSSFlyerDummyAdvice28-08-2013.doc')}}">Download Dummy Advice</a></li>
              <li><a href="{{ asset('policies/PHE_Preschool_A5.pdf')}}">Download Pre-School Immunisations PDF</a></li>

              </ul>
      </div>
      <center>    
          <button class="btn btn-warning">
                  <li><a href="/about">Back to the Top of the Page</a></li>
          </button>
      </center> 
      <br>  
  </div>

@include('includes.copyright')

@endsection