<!DOCTYPE html>
<html>
<head>
<title>EXCHANGE ZONE</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{asset('/')}}/admin/assetshttps://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}/admin/assets/css/style.css">
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/fonts/fa/css/all.min.css">
<!--    Animate CSS-->
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/css/animate.css">
<!--    Owl Carosel Stylesheets-->
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/plugins/owl-carosel/css/owl.carousel.min.css">
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/plugins/owl-carosel/css/owl.theme.default.css">
<!--    Magnetic Popup-->
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/plugins/magnific-popup/css/magnific-popup.css">
<!--    Bootstrap-4.3 Stylesheet-->
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/css/sub-dropdown.css">
<!--    Data Table CSS-->
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/plugins/data-table/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/plugins/data-table/css/fixedHeader.bootstrap4.min.css">
<!--    Theme Stylesheet-->
<link rel="stylesheet" href="    {{asset('/')}}/admin/assets/css/style.css">
<!--    Favicon-->
<link rel="shortcut icon" href="    {{asset('/')}}/admin/assets/images/favicon.png" type="image/x-icon">





</head>
<body>
<div id="header">
<div class="container">
<div class="row">
<div class="col-md-4">
<!-- <h1 id="logo">EXCHANGE ZONE</h1> --> <img src="{{asset('/')}}/admin/image/logo.jpg"  height= "65 " width="" alt="" >
</div>


<!--Main Menu Start-->
<nav class="navbar navbar-expand-lg ">
<!--    <a class="navbar-brand" href="#">LOGO</a>-->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="mobile-menu-icon fa fa-bars"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href=" {{route('home-view')}} "><span class="fa fa-home"></span> Home <span class="sr-only">(current)</span></a>
</li>
{{-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Student
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li class=""><a class="dropdown-item" href="form.html">Registration</a></li>
<li class=""><a class="dropdown-item" href="table.html">Batch Wise List</a></li>
<li class=""><a class="dropdown-item" href="#">Class Wise List</a></li>
</ul>
</li> --}}




<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Setting
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Admin</a>
<ul class="dropdown-menu">
<li><a href=" {{route('add-slide')}} " class="dropdown-item">Slide Add</a></li>
<li><a href=" {{route('slide-manage')}} " class="dropdown-item">Slide Manage</a></li>
</ul>
</li>

<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Brand</a>
<ul class="dropdown-menu">
<li><a href="{{route('add-brand')}} " class="dropdown-item">Add Brand</a></li>
<li><a href=" {{route('brand-list')}} " class="dropdown-item">list List</a></li>
</ul>
</li>

<li class="dropdown-submenu">
<a class="dropdown-item dropdown-toggle" href="#">Products Add</a>
<ul class="dropdown-menu">
<li><a href=" {{route('add-product')}} " class="dropdown-item">Products</a></li>
<li><a href=" {{route('product-list')}} " class="dropdown-item">Products List</a></li>
</ul>
</li>

</ul>
</li>


</ul>



<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
</div>
</nav>




</div>
</div>
</div>




