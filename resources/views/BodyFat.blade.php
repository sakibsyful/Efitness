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
<!-----------------------------------------------------Body Fat--------------------------------------->


<div id=outer><div class='ac b'><h2>Fat Percentage Calculator<h2></div><div id=cover><form name=fp><table class=main><col class=w60><col class=w60><tr><td>Measuring System<td><select id=msf onchange=msystem();><option value=metric>Metric (Kgs, Cms)<option value=us>US (lbs, inches)</select><tr><td>Sex<td><select id=sf><option value=m>Male<option value=f>Female</select><tr><td>Height <span id=thf>(Cms)</span><td><input id=hf><tr><td>Neck Girth<span id=tneck> (Cms)</span><td><input id=neck><tr><td>Waist <span id=twaist>(Cms)</span><td><input id=waist><tr><td>Hips <span id=thips>(Cms)</span><td><input id=hips><tr><td><button type=reset>Reset</button><td><button type=button onclick='bfat();'>Submit</button><tr><td>Your Body Fat<td><input id=bf class=op><tr><td>Body Fat Category<td><input id=nbf class=op><tr><td colspan=2 class='ac b'>Calculations are as per US Navy Formula</table></form></div></div>

<script>var $=function( id ){return document.getElementById(id)};
function msystem(){if( $('msf').value=='metric'){ $('thf').innerHTML=' (Cms)'; $('tneck').innerHTML=' (Cms)'; $('twaist').innerHTML=' (Cms)'; $('thips').innerHTML=' (Cms)'}else{ $('thf').innerHTML=' (inches)'; $('tneck').innerHTML=' (inches)'; $('twaist').innerHTML=' (inches)'; $('thips').innerHTML=' (inches)'}}
function bfat (){var ms= $('msf').value;var sex= $('sf').value;var height= $('hf').value;var neck= $('neck').value;var waist= $('waist').value;var hips= $('hips').value;var ibf;var bfc;if(height==null || height==0 || neck==null || neck==0 || waist==null || waist==0){ $('bf').value='Pl. enter data.'}else{ $('bf').value=''}
if(ms=='metric'&&sex=='m'&&height>0&&waist>0&&neck> 0){ibf=Math.round((86.010*(Math.log(waist*1-neck*1)/Math.log(10))-70.041*(Math.log(height)/Math.log(10))+30.30*1)*100)/100;if(ibf<=5){bfc='Essential'}else if(ibf>5&&ibf<=17){bfc='Fit'}else if(ibf>17&&ibf<=25){bfc='Acceptable'}else if(ibf>25 ) {bfc='Obese'} $('bf').value=ibf+' % '; $('nbf').value=bfc}
else if(ms=='us'&&sex=='m'&&height>0&&waist>0&&neck> 0){ibf= Math.round((86.010*(Math.log(waist*1-neck*1)/Math.log(10))-70.041*(Math.log(height)/Math.log(10))+36.76*1)*100)/100;if(ibf<=5){bfc='Essential'}else if(ibf>5&&ibf<=17){bfc='Fit'}else if(ibf>17&&ibf<=25){bfc='Acceptable'}else if(ibf>25 ) {bfc='Obese'} $('bf').value=ibf+' % '; $('nbf').value=bfc}
else if(ms=='metric'&&sex=='f'&&height>0&&waist>0&&neck> 0){ibf= Math.round((163.205*(Math.log(waist*1+hips*1-neck*1)/Math.log(10))-97.684*(Math.log(height)/Math.log(10))-104.912*1)*100)/100;
if(ibf<=15){bfc='Essential'}else if(ibf>15&&ibf<=24){bfc='Fit'}else if(ibf>24&&ibf<=31){bfc='Acceptable'}else if(ibf>31 ) {bfc='Obese'} $('bf').value=ibf+' % '; $('nbf').value=bfc}else if(ms=='us'&&sex=='f'&&height>0&&waist>0&&neck> 0){ibf= Math.round((163.205*(Math.log(waist*1+hips*1-neck*1)/Math.log(10))-97.684*(Math.log(height)/Math.log(10))-78.387*1)*100)/100;
if(ibf<=15){bfc='Essential'}else if(ibf>15&&ibf<=24){bfc='Fit'}else if(ibf>24&&ibf<=31){bfc='Acceptable'}else if(ibf>31 ) {bfc='Obese'}
 $('bf').value=ibf+' % '; $('nbf').value=bfc}}
// Widget Code by https://karvitt.com/widgets/
</script>
<style>#outer{width:90%;max-width:600px;background:#fff;margin:0 auto}
#cover{border:2px solid #111;padding:15px 0}
.main{table-layout:fixed;width:94%;border:0;text-align:left;border-collapse:collapse;margin:0 auto}
.main td{padding:0 8px;vertical-align:middle;border:0}
.main input{width:100%;border:1px solid #ccc;margin:2px 0;padding:0 2%;height:22px;text-align:right}.ac{text-align:center}.b{font-weight:bold}
.main select{width:100%;border:1px solid #ccc;margin:2px 0;background:#fff;height:22px}.w50{width:50%}.main button{width:100%;font-weight:bold;margin:3px 0}.w60{width:60%}.w40{width:40%}</style>

<body style="background-color:pink;">

<style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>








<!-----------------------------------------------------Body Fat--------------------------------------->

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