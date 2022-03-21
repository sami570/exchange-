
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
<h4 class="text-center font-weight-bold font-italic mt-3">Edit Brand</h4>
</div>
</div>

<form action="{{ route('update-brand') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="table-responsive p-1">
<table id="" class="table table-bordered dt-responsive nowrap text-center" style="width: 100%;">

<tr>
<td>
<div class="form-group row mb-0">
<label for="slideTitle" class="col-form-label col-sm-3 text-right">Brand Name</label>
<div class="col-sm-9">
<input type="text" class="form-control @error('brand_name') is-invalid @enderror" name="brand_name" value=" {{$brands->brand_name}} " id="brandName" placeholder="Brand Name" required>
@error('brand_name')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>



<tr>
<td>
<div class="form-group row mb-0">
<label for="description" class="col-form-label col-sm-3 text-right" for="title">Publication Status</label>
<div class="col-sm-9 text-left">
<div class="form-check col-form-label">
<input class="form-check-input" type="radio" name="status" value="1" {{$brands->status ==1 ?'checked':''}} >
<label class="form-check-label">Published</label>
</div>
<div class="form-check col-form-label">
<input class="form-check-input" type="radio" name="status" value="2" {{$brands->status ==2 ?'checked':''}}>
<label class="form-check-label">Unpublished</label>
</div>
@error('status')
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
</div>
</div>
</td>
</tr>
<input type="hidden" name="brand_id" value="{{$brands->id}}">
<tr><td><button type="submit" class="btn btn-sm btn-info my-btn-submit">update</button></td></tr>
</table>
</div>
</form>
</div>
</div>
</section>
<!--Content End-->
@endsection




