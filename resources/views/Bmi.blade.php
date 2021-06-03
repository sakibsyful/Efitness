<!DOCTYPE html>
<html lang="en">
<head>
  <title>E Fitness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
   <h6>Best Online Fitness Website In Bangladesh</h6>
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
        <a class="nav-link" href="{{URL::to('/HealthTips')}}">Health Tips <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buy Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{URL::to('/FatBurner')}}">Fat Burner</a>
          <a class="dropdown-item" href="{{URL::to('/Protein')}}">Protein</a>
          <a class="dropdown-item" href="{{URL::to('/PreWorkout')}}">Pre Workout</a>
          <a class="dropdown-item" href="{{URL::to('/PostWorkout')}}">Post Workout</a>
          <a class="dropdown-item" href="{{URL::to('/Multivitamin')}}">Multivitamin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Workout Details
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{URL::to('/Chest')}}">Chest</a>
          <a class="dropdown-item" href="{{URL::to('/Tricep')}}">Tricep</a>
          <a class="dropdown-item" href="{{URL::to('/Back')}}">Back</a>
          <a class="dropdown-item" href="{{URL::to('/Bicep')}}">Bicep</a>
          <a class="dropdown-item" href="{{URL::to('/Shoulder')}}">Shoulder</a>
          <a class="dropdown-item" href="{{URL::to('/Legs')}}">Legs</a>
          <a class="dropdown-item" href="{{URL::to('/Abs')}}">Abs</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Diet Plan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{URL::to('/Keto')}}">Keto</a>
          <a class="dropdown-item" href="{{URL::to('/LowCarb')}}">Low Carb</a>
          <a class="dropdown-item" href="{{URL::to('/HighCarb')}}">High Carb</a>
          <a class="dropdown-item" href="{{URL::to('/ProteinD')}}">Protein</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fitness Calculator
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{URL::to('/Bmi')}}">BMI</a>
          <a class="dropdown-item" href="{{URL::to('/Bmr')}}">BMR</a>
          <a class="dropdown-item" href="{{URL::to('/BodyFat')}}">Body Fat</a>
          <a class="dropdown-item" href="{{URL::to('/ProteinCalculator')}}">Protein Calculator</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
  </div>
  </div>
</div>
</nav>

<!-----------------------------BMI-------------------------->
<div class="containaer">

  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 mt-5">
          <div>
            <form name="bmiForm"><h2>
             <div class="shadow-sm p-3 mb-5 bg-body rounded">
              <label style="font-size: 18px">Your Weight(kg): </label>
              <input class="form-control" type="text" name="weight" size="10">
              
              <label for="" class="pt-3" style="font-size: 18px " >Your Height(cm): </label>
              <input class="form-control" type="text" name="height" size="10">
              
              <input class="btn btn-success form-control mt-3" type="button" value="Calculate BMI" onClick="calculateBmi()"><h2 >
             </div>
             <div class="shadow-sm p-3 mb-5 mt-5 bg-body rounded">
                
              
              <label style="font-size: 18px">Your BMI:  </label>
              <input class="form-control" type="text" name="bmi" size="10">
              
              
              <label style="font-size: 18px">This Means:   </label>
              <input type="text" name="meaning" class="form-control">
              <input class="form-control mt-3 btn btn-danger" type="reset" value="Reset" />
             </div>
            </form>
              
          </div>
      </div>
      <div class="col-md-4"></div>
  </div>

</div>


<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>




<!-----------------------------BMI-------------------------->

</body>
</html>


<footer class="text-center text-lg-start text-light" style="background-color: #2A3F54;font-size:14px;" >
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © Author: SYful Islam
        <a class="text-reset fw-bold" href="mailto:Syful35-1843@diu.edu.bd">Syful35-1843@diu.edu.bd</a>
      </div>
      <!-- Copyright -->
    </footer>