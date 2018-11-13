<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stepping Stones Pre-School</title>
    <link href="https://fonts.googleapis.com/css?family=Charmonman|Dokdo|Fahkwang|Nanum+Brush+Script|Pompiere" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/photos/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-dark" data-toggle="collapse" data-target="#myNavbar">
                <i class="fa fa-bars"></i>                    
            </button>
            <a class="navbar-brand" style="color:#6b00b3; font-size: 23px;" href="/">Stepping Stones Pre-school</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="linav"><a href="/about"><b class="link">About Our Pre-School</b></a></li>
                <li class="linav"><a href="/staff">Our Staff</a></li>
                <li class="linav"><a href="/routine">Our Routine</a></li>
                <li class="linav"><a href="/tapestry">Tapestry</a></li>
                <li class="linav"><a href="/photogallery">Photo Gallery</a></li>
                <li class="linav"><a href="/testimonials">Testimonials</a></li>
                <li class="linav"><a href="/contact">Contact Us</a></li>
            </ul>    
                                
                            
                        
                    
        </div>
        
     </nav>
    
     <div class="container">
         <div class="jumbotron">
            <div class="jumbotron-fluid">
                <center>
                    <img class="img-responsive " src="/images/IMG_7676.JPG" style="max-height: 200px;" >
                    {{-- <hr class="my-4"> --}}
                    <h1>Stepping Stones Pre-School</h1>
                </center>
            </div>
         </div>
     </div>
     <main class="py-4">
        @yield('content')
    </main>   
    
    @extends('layouts.footer')


</body>
</html>