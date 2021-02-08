@extends('layouts.home')

@section('tittle','USERPROFILE')

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('content')

        <div class="content ">
            <div class="container_12">
                <div class="row">
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-10">


                    </div>


                </div>
            </div>
        </div>

@endsection

