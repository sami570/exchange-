<?php


// Route::get('/', function () {
//     return view('admin.home.home');
// });


Route::get('/home-view',[

'uses'=>'homecontroller@index','as'=>'home-view'
]);


Route::get('/add-slide',[

'uses'=>'SliderController@addSlide','as'=>'add-slide'
]);


Route::post('/upload-slide',[

'uses'=>'SliderController@uploadSlide','as'=>'upload-slide'
]);

Route::get('/slide-manage',[

'uses'=>'SliderController@SlideManage','as'=>'slide-manage'
]);

Route::get('/slide-unpublished/{id}',[

 
'uses'=>'SliderController@slideUnpublished','as'=>'slide-unpublished'
]);

Route::get('/slide-published/{id}',[

 
'uses'=>'SliderController@slidePublished','as'=>'slide-published'
]);

Route::get('/slide-edit/{id}',[

 
'uses'=>'SliderController@slideEdit','as'=>'slide-edit'
]);

Route::post('/update-slide',[

'uses'=>'SliderController@updateSlide','as'=>'update-slide'
]);

Route::get('/slide-delete/{id}',[

 
'uses'=>'SliderController@slideDelete','as'=>'slide-delete'
]);


// add new route add brand

Route::get('/add-brand',[

'uses'=>'ControllerBrand@addBrand','as'=>'add-brand'

]);


Route::post('/upload-brand',[

'uses'=>'ControllerBrand@uploadBrand','as'=>'upload-brand'
]);

Route::get('/brand-list',[

'uses'=>'ControllerBrand@brandList','as'=>'brand-list'

]);

Route::get('/brand-unpublished/{id}',[

'uses'=>'ControllerBrand@brandUnpublished','as'=>'brand-unpublished'

]);

Route::get('/brand-published/{id}',[

'uses'=>'ControllerBrand@brandPublished','as'=>'brand-published'

]);



Route::get('/brand-published/{id}',[

'uses'=>'ControllerBrand@brandPublished','as'=>'brand-published'

]);

Route::get('/brand-edit/{id}',[

 
'uses'=>'ControllerBrand@brandEdit','as'=>'brand-edit'
]);


Route::post('/update-brand/',[

 
'uses'=>'ControllerBrand@updateBrand','as'=>'update-brand'
]);
Route::get('/brand-delete/{id}',[

 
'uses'=>'ControllerBrand@brandDelete','as'=>'brand-delete'
]);



// product Add new route

Route::get('/add-product',[

'uses'=>'productsController@addProduct','as'=>'add-product'
]);


Route::post('/upload-product',[

'uses'=>'productsController@uploadProduct','as'=>'upload-product'
]);



// home controller use and route call 
Route::get('/product-list',[

'uses'=>'homecontroller@productList','as'=>'product-list'
]);
















