<?php

namespace App\Http\Controllers;
use Image;
use App\Slide;
use Illuminate\Http\Request;




class SliderController extends Controller
{
    public function addSlide (){

     return view('admin.product.slide-add');
    }

    public function uploadSlide(Request $request){
$this->validate($request,[


'slide_image'=>'required',
'slide_title'=>'required',
'slide_description'=>'required',
'publication_status'=>'required'

]);

$data= new Slide();
$data->slide_image=$this->createSlide($request);
$data->slide_title =$request->slide_title;
$data->slide_description =$request->slide_description;
$data->publication_status =$request->publication_status;
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

    public function productManage(){

        $slides=Slide::where('publication_status',1)->get() ;
        
       return view('admin.product.productmanage',['slides'=>$slides]);
    }

 //    public function slideUnpublished($id){

 // $slide=Slide::find($id);
 // $slide->publication_status=2;
 // $slide->save();
 // return redirect('/product-manage')->with('error_message','Slide Unpublished Successfully');


 //    }


public function SlideManage(){

    $slide=Slide::all();
     return view('admin.product.slide-manage',['slide'=>$slide]);
}

public function slideUnpublished($id){
 $slide=Slide::find($id);
 $slide->publication_status=2;
 $slide->save();
 return redirect('/slide-manage')->with('error_message','Slide Unpublished Successfully');

}

public function slidePublished($id){
 $slide=Slide::find($id);
 $slide->publication_status=1;
 $slide->save();
 return redirect('/slide-manage')->with('message','Slide published Successfully');

}

public function slideEdit($id){

$slide=Slide::find($id);

return view('admin.product.edit-slide',['slide'=>$slide]);
}



public function updateSlide(Request $request){

$data=Slide::find($request->slide_id);
$data->slide_title =$request->slide_title;
$data->slide_description =$request->slide_description;
$data->publication_status =$request->publication_status;

if ($request->file('slide_image')) {
    
    unlink($data->slide_image);
    
    $data->slide_image=$this->createSlide($request);
}

$data->save();
 return redirect('/slide-manage')->with('message','Slide Successfull');





    }

    public function slideDelete($id){

        $slide=Slide::find($id);
        $slide->delete();
        return redirect('/slide-manage')->with('message','Slide Deleted Successfull');

    }


}
