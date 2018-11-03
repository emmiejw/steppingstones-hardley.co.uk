@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="panel panel-success">
                        <div class="panel-heading">Stepping Stones Admin Area</div>
                        <div class="panel-body">
                            <div class="panel-group">
                                <p>Please press on the red Edit button to view the current content of the page. After updating the page come back to this page and click on the page name to view the changes.</p>
                                    <div class="col-10">
                                        <center>
                                            <table class="table-borderless col-8">
                                                    <thead>
                                                        <tr>
                                                            <th class="th">Page</th>
                                                            <th class="th">Edit Page</th>
                                                            <th class="th">Add a Staff Member</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                          <td class="td"><a href="/about">About Our Preschool</a></td>
                                                          <td class="td"><a href="{{url('/about/1/edit')}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                                          
                                                        </tr>   
                                                        <tr>
                                                          <td class="td"><a href="/staff">Our Staff</a></td>
                                                          <td class="td"><a href="{{url('/staff/1/edit')}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                                          <td class="td"><a href="{{url('/staff/create')}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                                                          
                                                        </tr> 
                
                                                        <tr>
                                                          <td class="td"><a href="/testimonials">Testmonials</a></td>
                                                          <td class="td"><a href="{{url('testimonials/1/edit')}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>                                                          
                                                          {{-- <td><a href="/testimonials/create" class="btn btn-warning">Add</a></td> --}}
                                                        </tr>
                                                        <tr>
                                                          <td class="td"><a href="/photos">Photo Gallery</a></td>
                                                          <td class="td"><a href="{{url('/photogallery/1/edit')}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                                          {{-- <td><a href="/photos/create" class="btn btn-warning">Add</a></td> --}}
                                                        </tr>  
                                                        <tr>
                                                          <td class="td"><a href="/contact">Contact Us</a></td>
                                                          <td class="td"><a href="{{url('/contact/1/edit')}}" class="btn btn-danger"><i class="fa fa-edit"></i></a></td>
                                                          
                                                          {{-- <td><a href="/contact/create" class="btn btn-warning">Add</a></td> --}}
                                                        </tr> 
                                                    </tbody>
                                                </table>
                                            
                                                <br>
                                                <a class="btn btn-primary btn-lg" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </center>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                
                
                
                
                
                

               