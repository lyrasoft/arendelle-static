@extends('global.html')

@push('meta')
{{-- GA --}}
@endpush

@section('superbody')
@section('header')
    @include('main-header')
@show

@section('body')
    @yield('banner')

    @yield('content', $content ?? 'Content')
@show

@section('footer')
    @include('main-footer')
@show

<div class="l-float-tools">
    <a class="c-float-button c-float-button--top bg-secondary link-light"
        href="">
        <i class="fa fa-up"></i>
    </a>

    <a class="c-float-button c-float-button--contact bg-secondary link-light"
        href="">
        <i class="fa fa-message-lines"></i>
    </a>
</div>
@stop
