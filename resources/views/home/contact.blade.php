@extends('layouts.home')

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('tittle','CONTACT',$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)


@section('content')

        <div class="content ">
            <div class="container_12">
                <div class="row">
                    <div class="grid_4">
                        <h1>ADDRESS</h1>

                            {{$setting->contact}}
                    </div>
                    <div class="grid_4"></div>

                        <div class="grid_4 ">
                            <h1>Contact Us</h1>

                            <form id="checkout-form" class="clearfix" action="{{route('sendmessage')}}" method="post">
                                @csrf

                                <div class="billing details">

                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="NAME & SURNAME">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="text" name="phone" placeholder="Phone number">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="text" name="subject" placeholder="Subject">

                                    </div>
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="text" name="note" placeholder="Notunuz">

                                    </div>
                                    <div class="form-group mt-2">
                                        <textarea class="form-control" type="textarea" name="message" placeholder="Message"></textarea>

                                    </div>


                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary">Send message</button>

                                    </div>

                                    @include('home.message')

                                </div>


                            </form>
                        </div>





                </div>
            </div>
        </div>

@endsection

