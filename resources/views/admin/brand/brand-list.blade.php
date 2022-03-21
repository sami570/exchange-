

@extends('master')
@section('main-content')


<!--Content Start-->
<section class="container-fluid">
<div class="row content">
<div class="col-12 pl-0 pr-0">

    @if(Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Message : </strong> {{ Session::get('message') }}
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
<h4 class="text-center font-weight-bold font-italic mt-3">Slide List</h4>
</div>
</div>



<div class="table-responsive p-1">
<table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
<thead>
<tr>
<th>Sl.</th>
<th>Brand Name</th>
<th>status</th>
<th style="width: 100px;">Action</th>
</tr>
</thead>
<tbody>
@php($i=1)
@foreach($brands as $brand)
<tr>

<td>{{$i++}} </td>
<td>{{$brand->brand_name}} </td> 
<td>{{$brand->status ==1 ?'published':'Unpublished'}} </td>

<td>
@if($brand->status ==1)
<a href=" {{route('brand-unpublished',['id'=>$brand->id])}} " title="Deactivated" class=" btn btn-sm btn-info fa fa-arrow-alt-circle-up " ></a> 
@else
<a href=" {{route('brand-published',['id'=>$brand->id])}}  " title="active" class=" btn btn-sm btn-warning fa fa-arrow-alt-circle-down " ></a> 
@endif
<a href=" {{route('brand-edit',['id'=>$brand->id])}} " class=" btn btn-sm btn-info fa fa-edit " ></a> 
<a href=" {{route('brand-delete',['id'=>$brand->id])}}" onclick=" return confirm('If you want to delete this item Press Ok')" class=" btn btn-sm btn-danger fa fa-trash-alt " ></a> 

</td>  
</tr>
@endforeach



</tbody>
</table>
</div>
</div>
</div>
</section>
<!--Content End-->
@endsection
