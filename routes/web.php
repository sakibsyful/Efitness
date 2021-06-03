<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/Index','IndexController@Index');
 Route::get('/HealthTips','HealthTipsController@HealthTips');
 Route::get('/FatBurner','FatBurnerController@FatBurner');
 Route::get('/Protein','ProteinController@Protein');
 Route::get('/PreWorkout','PreWorkoutController@PreWorkout');
 Route::get('/PostWorkout','PostWorkoutController@PostWorkout');
 Route::get('/Multivitamin','MultivitaminController@Multivitamin');
 Route::get('/Chest','ChestController@Chest');
 Route::get('/Tricep','TricepController@Tricep');
 Route::get('/Back','BackController@Back');
 Route::get('/Bicep','BicepController@Bicep');
 Route::get('/Shoulder','ShoulderController@Shoulder');
 Route::get('/Legs','LegsController@Legs');
 Route::get('/Abs','AbsController@Abs');
 Route::get('/Keto','KetoController@Keto');
 Route::get('/LowCarb','LowCarbController@LowCarb');
 Route::get('/HighCarb','HighCarbController@HighCarb');
 Route::get('/ProteinD','ProteinDController@ProteinD');
 Route::get('/BodyFat','BodyFatController@BodyFat');
 Route::get('/ProteinCalculator','ProteinCalculatorController@ProteinCalculator');
 Route::match(['get','post'],'/addproducts','addproductsController@addproducts');
 Route::match(['get','post'],'/viewproducts','addproductsController@viewproducts');
 Route::match(['get','post'],'/Bmi','BmiController@Bmi');
 Route::match(['get','post'],'/Bmr','BmrController@Bmr');
  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
