@extends('layout.master')
@section('modules')
@if (isset($View) && View::exists('modules.' . $View))
	@include('modules.' . $View, ['module' => $Page])
@endif
@endsection
@section('content')
<div class="page-header parallaxie" style="background-image: url({{asset(str_replace('\\','/',$Meta->image))}});background-size: cover;
	background-position: center center;background-repeat:no-repeat">
	<div class="container">
					<div class="row">
									<div class="col-md-12">
													<div class="page-header-box">
																	<h1 class="text-anime">{{ $Page->title }}</h1>
																	<nav>
																					<ol class="breadcrumb wow fadeInUp" data-wow-delay="0.50s">
																									@hasSection('breadcrumb')
																									@yield('breadcrumb')
																									@else
																									<li class="breadcrumb-item"><a href="{{ route('home') }}">Home Page</a></li>
																									<li class="breadcrumb-item"><a href="{{ route('page',$Meta->slug) }}">{{$Meta->title}}</a></li>
																									<li class="breadcrumb-item active">{{ $Page->title }}</li>
																									@endif
																					</ol>
																	</nav>
													</div>
									</div>
					</div>
	</div>
</div>
@yield('modules')
@endsection
