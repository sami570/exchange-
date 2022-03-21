<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;
use App\products;
class homecontroller extends Controller
{
    public function index(){

    	$slides=Slide::where('publication_status',1)->get();
    	return view('admin.home.home',['slides'=>$slides]);
    }

    public function productList(){

    	
    	$products= products::all();
    	return view('admin.brand.products.product-list',['products'=>$products]);

    }
}
