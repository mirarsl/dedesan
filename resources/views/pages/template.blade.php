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
<div class="page-header parallaxie" style="background-image: url({{asset(str_replace('\\','/',$Page->image))}});background-size: cover;
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
                            <li class="breadcrumb-item active">{{ $Page->title }}</li>
                            @endif
                        </ol>
                    </nav>
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
