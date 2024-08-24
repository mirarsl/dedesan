@extends('layout.master')
@section('modules')
@if (isset($View) && View::exists('modules.' . $View))
@include('modules.' . $View, ['module' => $Page])
@endif
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset(str_replace('\\','/',$Page->image))}}">
	<div class="section-animation-shape1-1 shape-mockup animation-infinite" data-top="0" data-bg-src="assets/img/shape/global-line-shape1.png" data-opacity="7">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h1 class="breadcumb-title">{{$Page->title}}</h1>
					<ul class="breadcumb-menu">
						<li><a href="{{route('home')}}"><i class="ri-home-4-fill"></i> Anasayfa</a></li>
						<li><a href="{{route('page',$Meta->slug)}}"> {{$Meta->title}}</a></li>
						<li class="active">{{$Page->title}}</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>
@yield('modules')
@endsection
