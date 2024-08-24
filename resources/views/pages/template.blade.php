@extends('layout.master')
@section('modules')
@isset($Page->modules)
@forelse ($Page->modules as $module)
@if (View::exists('modules.' . $module->slug))
@include('modules.' . $module->slug, ['module' => $module])
@endif
@empty
@endforelse
@endisset
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
                        <li class="active">{{$Page->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
@if (!(empty($Page->data())))
    @if (View::exists('modules.' . $Page->list_name))
        @include('modules.' . $Page->list_name, ['module' => $Page])
    @else
        @include('modules.list', ['module' => $Page])
    @endif
@endif
@yield('modules')
@endsection
