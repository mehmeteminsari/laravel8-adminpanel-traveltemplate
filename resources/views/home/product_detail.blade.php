@extends('layouts.home')

@section('tittle',$data->title)
@section('description'){{$data->description}}@endsection
@section('keywords',$data->keywords)

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@section('content')
    <div class="main">




        <div class="row">

                <div id="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="active"><h2>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</h2></li>
                        <li class="active"><h2></h2></li>
                    </ul>
                </div>

            <div class="col md-6">
                {{--  urunle ilgili detay slider kismi --}}
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="d-block w-60" alt="...">
                        </div>
                        @foreach($datalist as $rs)
                            <div class="carousel-item">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" class="d-block w-60" alt="...">
                            </div>
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                {{--  urunle ilgili detay slider kismi --}}
            </div>

            <div class="col md-6">




            </div>


        </div>

        @php
            $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
            $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
        @endphp

        <div class="col md-6">
            <div class="extra_wrapper">

                <p class="text1">Gellentesque imperdiet </p>
                <div>
                    <p class="fa fa-star @if($avgrev<1) -o empty @endif"></p>
                    <p class="fa fa-star @if($avgrev<2) -o empty @endif"></p>
                    <p class="fa fa-star @if($avgrev<3) -o empty @endif"></p>
                    <p class="fa fa-star @if($avgrev<4) -o empty @endif"></p>
                    <p class="fa fa-star @if($avgrev<5) -o empty @endif"></p>
                </div>


                <p class="price">BURASI PRODUCT BLADE<span>From $ 299</span></p>

            </div>

        </div>
        <div class="row">
            <div class="col-4">
                <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">Description</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Reviews({{$countreview}})</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Details</a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">dfghffdgjfjg</div>

                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

                    <div class="row">
                        <div class="col md-8">
                            @foreach($reviews as $rs)
                            <div class="blog">


                                <div class="links"><a href="#">{{$rs->user->name}}</a>
                                    <a href="#" class="fa fa-star @if($rs->rate<1) -o empty @endif"></a>
                                    <a href="#" class="fa fa-star @if($rs->rate<2) -o empty @endif"></a>
                                    <a href="#" class="fa fa-star @if($rs->rate<3) -o empty @endif"></a>
                                    <a href="#" class="fa fa-star @if($rs->rate<4) -o empty @endif"></a>
                                    <a href="#" class="fa fa-star @if($rs->rate<5) -o empty @endif"></a>

                                </div>



                                <blockquote class="blockquote">
                                    <h1>{{$rs->subject}} </h1>
                                    <div>{{$rs->created_at}}</div>
                                    <p> YORUM :{{$rs->review  }}</p>

                                    <a href="" class="btn">{{$countreview}} Review(s) {{$avgrev}}</a>
                                </blockquote>

                            </div>
                            @endforeach
                        </div>

                        <div class="col md-4">
                            @livewire('review',['id'=>$data->id])
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">fghjfghjffgjhfghjfghjgjh</div>

            </div>
        </div>




        {{-- footer kismi--}}
        <div class="clear"></div>
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
        {{-- footer kismi--}}
    </div>



@endsection

