@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('tittle','REFERENCES',$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)


@section('content')

        <div class="content ">
            <div class="container_12">
                <div class="row">


                        {!!$setting->references !!}


                </div>
            </div>
        </div>

@endsection

