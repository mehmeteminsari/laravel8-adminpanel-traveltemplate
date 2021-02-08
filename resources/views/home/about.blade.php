@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('tittle','ABOUT US',$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)


@section('content')

        <div class="content ">
            <div class="container_12">
                <div class="row">
                {!!$setting->aboutus!!}
                </div>
            </div>
        </div>

@endsection

