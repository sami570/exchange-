<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Image;
use App\Brand;
class productsController extends Controller
{
    public function addProduct(){

    	$brands=Brand::all();
     
    	return view ('admin.brand.products.product-add',['brands'=>$brands]);
    }



public function uploadProduct(Request $request){
$this->validate($request,[


'slide_image'=>'required',
'brand_name'=>'required',
'Condition'=>'required',
'price'=>'required',
'camera'=>'required',
'processor'=>'required',
'ram'=>'required',
'sim'=>'required',
'status'=>'required'

]);

$data= new products();
$data->slide_image=$this->createSlide($request);
$data->brand_name =$request->brand_name;
$data->Condition =$request->Condition;
$data->camera =$request->camera;
$data->processor =$request->processor;
$data->ram =$request->ram;
$data->sim =$request->sim;
$data->status =$request->status;
$data->save();

return back()->with('message','New product Added Successfully');



    }

    protected function createSlide($request){
    	$file=$request->file('slide_image');
    	$imageName=$file->getClientOriginalName();
    	$directory='admin/assets/image';
    	$imageUrl=$directory.$imageName;
    	Image::make($file)->resize(1900,700)->save($imageUrl);
    	return $imageUrl;
    }




//     public function uploadProduct(Request $request){

//     	{
// $this->validate($request,[


// 'slide_image'=>'required',
// 'brand_name'=>'required',
// 'Condition'=>'required',
// 'price'=>'required',
// 'camera'=>'required',
// 'processor'=>'required',
// 'ram'=>'required',
// 'sim'=>'required',
// 'status'=>'required'

// ]);

// $data= new products();
// $data->slide_image=$this->createProduct($request);
// $data->brand_name =$request->brand_name;
// $data->Condition =$request->Condition;
// $data->camera =$request->camera;
// $data->processor =$request->processor;
// $data->ram =$request->ram;
// $data->sim =$request->sim;
// $data->status =$request->status;


// $data->save();

// return back()->with('message','New product Added Successfully');
//     }

//    protected function createProduct($request){
//     	$file=$request->file('slide_image');
//     	$imageName=$file->getClientOriginalName();
//     	$directory='admin/assets/image';
//     	$imageUrl=$directory.$imageName;
//     	Image::make($file)->resize(1900,700)->save($imageUrl);
//     	return $imageUrl;
//     }

//     }

}



// 

// 'slide_image'=>'required',
// 'brand_name'=>'required',
// 'Condition'=>'required',
// 'price'=>'required',
// 'camera'=>'required',
// 'processor'=>'required',
// 'ram'=>'required',
// 'sim'=>'required',
// 'status'=>'required'
