

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
<th>Slide Title</th>
<th>Slide Description</th>
<th>Slide Image</th>
<th>status</th>
<th style="width: 100px;">Action</th>
</tr>
</thead>
<tbody>
@php($i=1)
@foreach($slide as $slide)
<tr>

<td>{{$i++}} </td>
<td>{{$slide->slide_title}} </td> 
<td>{{$slide->slide_description}} </td> 

<td> <img  style=" width: 150px" src="{{asset('/')}}{{$slide->slide_image}}"  alt="Slide Image"> </td>
<td>{{$slide->publication_status ==1 ?'published':'Unpublished'}} </td>

<td>
@if($slide->publication_status ==1)
<a href=" {{route('slide-unpublished',['id'=>$slide->id])}} " title="Deactivated" class=" btn btn-sm btn-info fa fa-arrow-alt-circle-up " ></a> 
@else
<a href=" {{route('slide-published',['id'=>$slide->id])}}  " title="active" class=" btn btn-sm btn-warning fa fa-arrow-alt-circle-down " ></a> 
@endif
<a href=" {{route('slide-edit',['id'=>$slide->id])}} " class=" btn btn-sm btn-info fa fa-edit " ></a> 
<a href=" {{route('slide-delete',['id'=>$slide->id])}}" onclick=" return confirm('If you want to delete this item Press Ok')" class=" btn btn-sm btn-danger fa fa-trash-alt " ></a> 

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
