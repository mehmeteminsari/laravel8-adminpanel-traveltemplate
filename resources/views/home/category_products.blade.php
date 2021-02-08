@extends('layouts.home')

@section('tittle','productlist',$data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('content')
    <div class="main">
    <div class="content">
        <div class="container_12">
            <div class="grid_9">
                <h3>{{$data->title}}</h3>

                <div class="tours">
                    @foreach($datalist as $rs)
                        <div class="tour"> <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 160px" alt="" class="img_inner fleft">
                            <div class="extra_wrapper">
                                <p class="text1">Gellentesque imperdiet </p>
                                <p class="price">Lorem ipsum dolor sit amet <span>From $ 399</span></p>
                                <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
                                <a href="{{route('product',['id'=>$rs->id,'city'=>$rs->title])}}" class="btn">Details</a> </div>
                        </div>
                    @endforeach
                </div>


            </div>
            <div class="grid_3">
                <h3>Browse Tours</h3>
                <form method="post" id="form1" class="form1" action="#">
                    <label class="mb0"> <span>Browse by Tour Operator</span>
                        <select name="select">
                            <option value="">Browse by Tour Operator</option>
                            <option value="">...</option>
                        </select>
                    </label>
                    <div class="clear"></div>
                    <a onClick="document.getElementById('form1').submit()" href="#" class="btn"> Search</a>
                </form>
                <h3>Search Tours</h3>
                <form method="post" id="form2" class="form1" action="#">
                    <label > <span><span class="col1">All Tour Operators</span><br>
            Destination</span>
                        <select name="select">
                            <option value="">Any destination</option>
                            <option value="">...</option>
                        </select>
                    </label>
                    <label > <span>Departing</span>
                        <select name="select">
                            <option value="">Any departing</option>
                            <option value="">...</option>
                        </select>
                    </label>
                    <label> <span>Price</span>
                        <select name="select">
                            <option value="">Any price</option>
                            <option value="">...</option>
                        </select>
                    </label>
                    <label class="mb0"> <span>Duration</span>
                        <select name="select">
                            <option value="">Any duration</option>
                            <option value="">...</option>
                        </select>
                    </label>
                    <div class="clear"></div>
                    <a onClick="document.getElementById('form2').submit()" href="#" class="btn"> Search</a>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bottom_block">
        <div class="container_12">
            <div class="grid_2 prefix_2">
                <ul>
                    <li><a href="#">FAQS Page</a></li>
                    <li><a href="#">People Say</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="#">Useful links</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Family Travel</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h4>Contact Us:</h4>
                TEL: 1-800-234-5678<br>
                <a href="#">info@demolink.org</a> </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>


@endsection

