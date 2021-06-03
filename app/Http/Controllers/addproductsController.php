<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Image;

use App\addproducts;

class addproductsController extends Controller

{      public function addproducts(Request $request){


          if($request->ismethod('post')) {
              $data= $request->all();
             // echo "<pre>";print_r($data);die;

             $addproducts=new addproducts;
             $addproducts->name=$data['product_name'];
             $addproducts->type=$data['type'];
             $addproducts->price=$data['price'];

             //upload image

             if($request->hasfile('image')){
               echo $img_tmp = $request->file('image');

               if($img_tmp->IsValid()){

               //path code
               $extension=$img_tmp->getClientOriginalExtension();
               $filename=rand(111,99999).'.'.$extension;
               $img_path='uploads/addproduct/'.$filename;

               //image resize

               $addproducts->image=$filename;

             }
            }

             $addproducts->save();
             return redirect('/addproducts')->with('flash_message_success','Products has been added successfully!!');

          }
       
           return view("addproducts");
}
public function viewproducts(){
  $products= addproducts::get();

  return view('viewproducts')->with(compact('products'));
}

}