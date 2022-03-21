
@extends('master')
@section('main-content')
<!--Content Start-->
<section class="container-fluid">
<div class="row content">
<div class="col-md-8 offset-md-2 pl-0 pr-0">

@if(Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Message : </strong> {{ Session::get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<div class="form-group">
<div class="col-sm-12">
<h4 class="text-center font-weight-bold font-italic mt-3">Product Add Form</h4>
</div>
</div>

<form action="{{ route('upload-product') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="table-responsive p-1">
<table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">
<tr><td><img src="{{ asset('/') }}/admin/assets/images/camera.png" alt="" id="slide_show" style="max-height: 244px"></td></tr>
<tr>
<td>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" name="slide_image" id="slideImage" onchange="showImage(this, 'slide_show')" required>
<label class="custom-file-label" for="inputGroupFile02" id="fileLabel">Choose file</label>
</div>
</div>
@error('product_image')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</td>
</tr>
<tr>
<td>
<div class="form-group row mb-0">
<label for="brand" class="col-form-label col-sm-3 text-right">BRAND</label>
<div class="col-sm-9">


<label for="brand">Chose a brand:</label>

<select name=" brand_name" id="brand">
 
 @foreach($brands as $brand)
  <option  value="{{$brand->id}} "> {{$brand->brand_name}} </option>
  
  @endforeach
</select>
 
@error('product_name')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>

<div class="form-group">
    <strong>Chose a brand:</strong>
    <select name="brand_name" class="form-control custom-select">
      <option value="">Select Brand</option>
      @foreach($brands as $brand)
        <option value="{{ $brand->id }}" @if($brand->id == $brand->brand_name) selected @endif>{{ $brand->brand_name }}</option>
      @endforeach
    </select>
</div>



<tr>
<td>
<div class="form-group row mb-0">
<label for="slideTitle" class="col-form-label col-sm-3 text-right">PRODUCT  NAME</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" id="slideTitle" placeholder="product_name" required>
@error('product_name')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>

<tr>
<td>
<div class="form-group row mb-0">
<label class="col-form-label col-sm-3 text-right" for="slideDescription">CONDITION</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('Condition') is-invalid @enderror" name="Condition" id="slideDescription" placeholder="Condition" value="{{ old('Condition') }}" required>
@error('Condition')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>

<tr>
<td>
<div class="form-group row mb-0">
<label class="col-form-label col-sm-3 text-right" for="slideDescription">PRICE</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('Price') is-invalid @enderror" name="price" id="slideDescription" placeholder="price" value="{{ old('price') }}" required>
@error('price')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>


<tr>
<td>
<div class="form-group row mb-0">
<label class="col-form-label col-sm-3 text-right" for="slideDescription">CAMERA</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('camera') is-invalid @enderror" name="camera" id="slideDescription" placeholder="CAMERA" value="{{ old('camera') }}" required>
@error('camera')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>

<tr>
<td>
<div class="form-group row mb-0">
<label class="col-form-label col-sm-3 text-right" for="slideDescription">PROCESSOR</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('processor') is-invalid @enderror" name="processor" id="slideDescription" placeholder="processor" value="{{ old('processor') }}" required>
@error('processor')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>

<tr>
<td>
<div class="form-group row mb-0">
<label class="col-form-label col-sm-3 text-right" for="slideDescription">RAM & ROM</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('ram') is-invalid @enderror" name="ram" id="slideDescription" placeholder=" ram & rom" value="{{ old('ram') }}" required>
@error('ram')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>


<tr>
<td>
<div class="form-group row mb-0">
<label class="col-form-label col-sm-3 text-right" for="slideDescription">SIM</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('sim') is-invalid @enderror" name="sim" id="slideDescription" placeholder="sim" value="{{ old('sim') }}" required>
@error('sim')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>





<tr>
<td>
<div class="form-group row mb-0">
<label for="description" class="col-form-label col-sm-3 text-right" for="title">PUBLICATION STATUS</label>
<div class="col-sm-9 text-left">
<div class="form-check col-form-label">
<input class="form-check-input" type="radio" name="status" value="1">
<label class="form-check-label">Published</label>
</div>
<div class="form-check col-form-label">
<input class="form-check-input" type="radio" name="status" value="2">
<label class="form-check-label">Unpublished</label>
</div>
@error('publication_status')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>

<tr><td><button type="submit" class="btn btn-info my-btn-submit">Upload</button></td></tr>
</table>
</div>
</form>
</div>
</div>
</section>
<!--Content End-->
@endsection




