
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 


<!--------------------------------------------Index--------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E Fitness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{asset('/css/style.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>


<!---------------Header----------->




<section class="header">
<div class="container">
<div class="row">
<div class="col-6 py-3">
   <h6>EFitnes</h6>
</div>

<div class= "col-6 text-right py-3">
    
    <a href="https://www.facebook.com/sakibsyful/"> <i class="fab fa-facebook"></i></a>



</div>
</div>
</div>

</section>
<!-----------------------navbar--------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 sticky-top">
    <div class="container">
        <div class="row">
            <div class="col-4">

  <a class="navbar-brand" href="{{URL::to('/Index')}}"><img src="/image/logo.JPG" width="50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
</div>

    <div class="col-8 text centre">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/Index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/addproducts')}}">Add Products <span class="sr-only">(current)</span></a>
      </li>
    
     



    </ul>
  </div>
  </div>
</div>
</nav>
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8 py-3">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<footer class="text-center text-lg-start text-light" style="background-color: #2A3F54;font-size:14px;" >
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  © Author: SYful Islam
     <a class="text-reset fw-bold" href="mailto:Syful35-1843@diu.edu.bd">Syful35-1843@diu.edu.bd</a>
  </div>
  <!-- Copyright -->
</footer>
