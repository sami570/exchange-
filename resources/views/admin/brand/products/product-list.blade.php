

@extends('master')
@section('main-content')

<!--Content Start-->
<section class="container-fluid">
<div class="row content">
<div class="col-12 pl-0 pr-0">

    @if(Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Message: </strong> {{ Session::get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if(Session::get('error_message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Message : </strong> {{ Session::get('error_message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<div class="form-group">
<div class="col-sm-12">
<h4 class="text-center font-weight-bold font-italic mt-3">Product  List</h4>
</div>
</div>



<div class="table-responsive p-1">
<table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
<thead>

@php($i=1)
@foreach($products as $product)
<tr>
<th><td>{{$i++}} </td></th>
<th>{{$product->Condition}}</th>
<td>{{$product->camera}}</td>
<th>{{$product->processor}}</th>
<th>{{$product->status}}</th>
<th>{{$product->brand_name}}</th>
<th><div class="item"><img style=" height: 150px" src="{{asset('/')}}{{$product->slide_image}}" alt=""></th>
<th>status</th>
<th style="width: 100px;">Action</th>
</tr>

@endforeach
</thead>



</table>
</div>
</div>
</div>
</section>
<!--Content End-->
@endsection
