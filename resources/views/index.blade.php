<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    <script src="https://use.fontawesome.com/7c77a89f23.js?v=<?php echo time(); ?>"></script>
    <script src="https://kit.fontawesome.com/b961a2b7a4.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Granite Web</title>
</head>
<body>
    <div class="container" id="root" >

    <h1 class="text-center pt-2 pb-3" id="topic"> <img src="/img/logo.jpg" id="logo" /> Sunil Granite & Pantry Cupboard</h1>

    </div>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="indexnav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbaritem">
        <li class="nav-item ">
          <a class="nav-link" aria-current="page" href="{{url('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('ourwork')}}">Our Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('samples')}}">Samples</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('About')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid mt-3">

@if(View::hasSection('content'))
        @yield('content')
    @else


    <!-- idex page content -->

     <div class="row text-center" id="row1">
       <h2 class="display-2" >We are the best granite workers</h2>
       <h2 >We've a big expireance</h2>
       <h2 >We've a lots of granite designs</h2>
       <h2 id="com" >Compatible with modern home architecture</h2>
       <h2 >Do you want to ,</h2>
       <ul class="list">
         <li class="list-item">Pantry & vanity Cupboard with granite tops.</li>
         <li class="list-item">Granite, marble & Quatz installation for any surface.</li>
       </ul>
       <h2 >Don't be late</h2>
       <h2 >Contact us as soon as possible</h2>
       <h2><a class="btn btn-primary" id="contactbtn" href="" role="button">Contact Us</a></h2>

      




     </div>


        
    @endif
  
    <footer class="text-center text-white mt-5" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark">Sunil Granite and Pantry Cupboard</a>
  </div>
  <!-- Copyright -->
</footer>


 

    

</div>

    
    
</body>
</html>