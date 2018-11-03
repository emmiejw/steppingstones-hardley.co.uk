@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-group">
      <div class="panel panel-info">
        <div class="panel-heading">Contact Us</div>
        <div class="panel-body">
            <h3 style="text-align:center;">Please do contact us if you and your little one would like to come a visit us</h3>
            <div class="col-sm-4">
                <center>
                  @foreach ($contacts as $contact)
                      
                  @endforeach
                    <p>
                        <br>
                        <b>Address</b>: <br>
                          {{$contact->address_1}} <br>
                          {{$contact->address_2}}<br>
                          {{$contact->City}}<br>
                          {{$contact->postcode}} <br>
                          <br>
                        <b>Call us on</b>:
                          {{$contact->phone}} <br>
                          <br>
                        <b>Email us</b>: 
                        {{$contact->email}} <br>
                          <br>
                          <br>
                            <b>Ofsted URN - EY297420</b> <br>
                            <b>Registered charity No. 1022377</b>
                      </p>
                  </center>
            </div>
            <div class="col-sm-8">
              <center>
                <img src="images/map.png" style="width: 40vmax;">
              </center>  
            </div> 
            
      </div>
  </div>


@endsection