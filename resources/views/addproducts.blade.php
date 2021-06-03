<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Scripts -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="{{asset('/css/style.css') }}">

      <!-- Styles -->
  </head>
  <body>
     {{-- navbar --}}

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container" style="font-size: 18px">
        <a class="navbar-brand" style="font-size: 20px;" href="">Efitness</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            {{-- <li class="nav-item">
             <a class="nav -link active" aria-current="page" href="#">Home</a>
            </li> --}}
            
          </ul>
          <form class="d-flex">
            <a class="nav -link active" aria-current="page" style="color: white" href="{{URL::to('/Index')}}">Home</a>
          </form>
        </div>
      </div>
    </nav>

     {{-- =============== --}}
     <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               
               <div class="shadow-sm p-3 mb-5 mt-5 bg-body rounded">
                  <h4 class="text-center">Add Product</h4>
                  <form class="" enctype="multipart/form-data"action="{{url('/addproducts')}}" method="post"> {{csrf_field()}}
                     <div class="form-group">
                        <label>Product  Name</label>
                        <input type="text" class="form-control" placeholder="Enter Products Name" name="product_name" id="product_name"required> 
                     </div>
            
                     <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" placeholder="Enter Type" name="type" id="type"required>
                     </div>
                  
                     <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" placeholder="Enter Price" name="price" id="price"required>
                     </div>
                                             
                     <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" class="form-control" name="image">
                     </div>
                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" value="Add products">
                     </div>
                  </form>
               </div>
               <div class="shadow-sm p-3 mb-5 mt-2 bg-body rounded">
                  <a class="btn btn-danger" style="width: 100%" href="viewproducts"> <i class="fa fa-plus pe-2"></i>View Products
                  </a>  
               </div>
            </div>
            <div class="col-md-4"></div>
        </div>
     </div>
     <footer class="text-center text-lg-start text-light" style="background-color: #2A3F54;font-size:14px;" >
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © Author: SYful Islam
        <a class="text-reset fw-bold" href="mailto:Syful35-1843@diu.edu.bd">Syful35-1843@diu.edu.bd</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </body>
</html>
