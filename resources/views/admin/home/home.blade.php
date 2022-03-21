@extends('master')

@section('main-content')
<section class="container-fluid">
<div class="row">
<div class="col-12 pl-0 pr-0">
<div class="owl-carousel">
@foreach($slides as $slide)
<div class="item"><img style=" height: 400px" src="{{asset('/')}}{{$slide->slide_image}}" alt="">
<div {{-- style=" background:red" --}} class="carousel-caption d-none d-md-block">
<h5 >{{$slide->slide_title}}</h5>
<p> {{$slide->slide_description}} </p>
</div>
</div>

@endforeach



</div>
</div>
</div>
</section>
<!--Slider End-->
<!-- brand section -->
<div id="" class="">
	<div class="container">
		<h1>Sell your Mobile Phone for Instant Cash</h1>
		----choose a brand---

<div class="row">
		<div class="col-sm-6 col-lg-3">
		<div class="news-post">
		<a href="  {{route('product-list')}} "><img class="card-img-top" src=" {{asset('/')}}/admin/assets/logo/01.jpg" height=" 120px " alt="Card image cap"></a>
		</div>
		</div>

<div class="col-sm-6 col-lg-3">
			<div class="news-post">
			<img class="card-img-top" src="{{asset('/')}}/admin/assets/logo/02.jpg" height=" 120px " alt="Card image cap">
			</div>
		</div>

		<div class="col-sm-6 col-lg-3">
			<div class="news-post">
			<img class="card-img-top" src="{{asset('/')}}/admin/assets/logo/03.jpg" height=" 120px " alt="Card image cap">
			</div>
		</div>
		<div class="col-sm-6 col-lg-3">
			<div class="news-post">
			<img class="card-img-top" src="{{asset('/')}}/admin/assets/logo/04.jpg" height=" 120px " alt="Card image cap">
			<a href="brand.html" class="readmore">More Brand</a>
			</div>

		</div>


</div>
</div>

</div>
 

@endsection


