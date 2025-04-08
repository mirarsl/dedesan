@extends('layout.master')
@section('content')
<h1 class="w-0 opacity-0">Kocaeli İnşaat Firması</h1>
@foreach ($Page->modules as $module)
@if (View::exists('modules.' . $module->slug))
@include('modules.' . $module->slug, ['module' => $module])
@else
{{-- @include('modules.default', ['module' => $module]) --}}
@endif
@endforeach

@endsection
