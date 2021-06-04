
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Scripts -->

     
 
      <link rel="stylesheet" href="{{asset('/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
      
            
          </ul>
          <form class="d-flex">
            <a class="pe-3 nav -link active" aria-current="page" style="color: white" href="{{URL::to('/home')}}">Home</a>
            
            <a class="" style="color: white" href="addproducts">Add Products </a>
          </form>
        </div>
      </div>
    </nav>

     {{-- =============== --}}
     <div class="container">
         <div class="my-5"> 
            <h4 class="text-center mb-5">View Product</h4>
            <table id="table_id" class="table table-bordered table-striped table-hover">      
               <thead >
                  <tr class="info">
                     <th>Name</th>
                     <th>Type</th>
                     <th>Price</th>
                     <th>Image</th>
                  </tr> 
               </thead>
               <tbody>
                  @foreach($products as $product)
                  </tr>
                     <td> {{ $product->name}}</td>
                     <td> {{ $product->type}}</td>
                     <td> {{ $product->price}}</td>
                     <td> {{ $product->image}}</td>
                        {{-- <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button> --}}
                     </td>
                  </tr>
                  @endforeach 
               </tbody>
            </table>
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
     
  </body>
</html>
