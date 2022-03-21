<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class ControllerBrand extends Controller
{
    public function addBrand(){

    	return view('admin.brand.brand-add');
    }

    public function uploadBrand(Request $request){
$this->validate($request,[
'brand_name'=>'required',
'status'=>'required'

]);


$data= new Brand();
$data->brand_name =$request->brand_name;
$data->status =$request->status;
$data->save();

return back()->with('message','Brand Added Successfully');
    }

    public function brandList(){

    	$brands=Brand::all();
     return view('admin.brand.brand-list',['brands'=>$brands]);

    }

    public function brandUnpublished($id){

    	$brands=Brand::find($id);
 $brands->status =2;
 $brands->save();
 return redirect('/brand-list')->with('error_message','Brand Unpublished Successfully');
    }

    public function brandPublished($id){

    	$brands=Brand::find($id);
 $brands->status =1;
 $brands->save();
 return redirect('/brand-list')->with('message','Brand published Successfully');
    }

    public function brandEdit($id){

    	$brands=Brand::find($id);

return view('admin.brand.edit-brand',['brands'=>$brands]);

    }

    public function updateBrand(Request $request){

// $brands=Brand::find($request->brand_id);

$data=Brand::find($request->brand_id);
$data->brand_name =$request->brand_name;
$data->status =$request->status;
$data->save();

return back()->with('message','Brand Added Successfully');
    }


    public function brandDelete($id){

        $data=Brand::find($id);
        $data->delete();
        return redirect('/brand-list')->with('message','Slide Deleted Successfull');

    }


}
