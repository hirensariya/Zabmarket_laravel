
 <!doctype html>
 <html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha256-fDncdclXlALqR3HOO34OGHxek91q8ApmD3gGldM+Rng=" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha256-2DoaRRHfHWna6mpfGImxAx/cu0vFGpqEkcf/YXf+yk4=" crossorigin="anonymous" />
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="{{ asset('adminstyle.css') }}">
   <link rel="stylesheet" href="{{ asset('media.css') }}">
   <!-- <link rel="stylesheet" href="bar.css"> -->

   <title>Welcome To Zabmarket</title>
 </head>

 <body>
  
  <!-- As a link -->
  <nav class="navbar navbar-light" id="n">
     <div id="d1">
       <a class="navbar-brand" href="#" id="a1">Welcome to Zabmarket</a>
     </div>

   </nav>
   <hr>


   <!-- navbar -->
   <nav class="navbar navbar-expand-lg " id="n1">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item " style="padding-left: 30px;">
           <a class="nav-link" href="/admin/dashbord">Product List</a>
         </li>
         <li class="nav-item " style="padding-left: 30px;">
           <a class="nav-link" href="/admin/product">Add Product</a>
         </li>
         <li class="nav-item " style="padding-left: 30px;">
           <a class="nav-link" href="/admin/order">Oreder List</a>
         </li>
         <li class="nav-item " style="padding-left: 30px;">
           <a class="nav-link" href="/admin/custmer">Custmor List</a>
         </li>
       </ul>
       <h3 id="login"><a href="/admin/logout"> Logout</a></h3>

     </div>

   </nav>

   <!-- navbar end -->
   
   @yield('content')

      <!-- footer -->
      <footer class="py-5 mb-2" id="footer">
     <div class="row">
       <div class="col-12 col-md">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false">
           <title>Product</title>
           <circle cx="12" cy="12" r="10"></circle>
           <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
           </path>
         </svg>
         <small class="d-block mb-3 text-muted">?? Zabmarket</small>
       </div>
       <div class="col-6 col-md">
         <h5>Features</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Cool stuff</a></li>
           <li><a class="text-muted" href="#">Random feature</a></li>
           <li><a class="text-muted" href="#">Team feature</a></li>
           <li><a class="text-muted" href="#">Stuff for developers</a></li>
           <li><a class="text-muted" href="#">Another one</a></li>
           <li><a class="text-muted" href="#">Last time</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>Resources</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Resource</a></li>
           <li><a class="text-muted" href="#">Resource name</a></li>
           <li><a class="text-muted" href="#">Another resource</a></li>
           <li><a class="text-muted" href="#">Final resource</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>Resources</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Business</a></li>
           <li><a class="text-muted" href="#">Education</a></li>
           <li><a class="text-muted" href="#">Government</a></li>
           <li><a class="text-muted" href="#">Gaming</a></li>
         </ul>
       </div>
       <div class="col-6 col-md">
         <h5>About</h5>
         <ul class="list-unstyled text-small">
           <li><a class="text-muted" href="#">Team</a></li>
           <li><a class="text-muted" href="#">Locations</a></li>
           <li><a class="text-muted" href="#">Privacy</a></li>
           <li><a class="text-muted" href="#">Terms</a></li>
         </ul>
       </div>
     </div>
   </footer>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
   <script src="demo.js"></script>
   <script src="temp.js"></script>
</body>

 </html>
   <!-- footer -->