@extends('layouts.home')


@section('title',$setting->title)
@section('description'){{ $setting->description }} @endsection
@section('keywords', $setting->keywords)

@section('content')
    @include('home._slider')
    <h3>Top Destinations</h3>

    <div class="boxes">
        @foreach($slider as $rs)
        <div class="grid_4">
            <figure>
                <div><<img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt=""></div>
                <figcaption>
                    <h3>{{$rs->title}}</h3>
                    {{$rs->description}}Lorem ipsum dolor site geril amet, consectetur cing eliti. Suspendisse nulla leo mew<a href="{{route('addtocart',['id'=>$rs->id])}}" class="btn">Details</a> </figcaption>
            </figure>
        </div>
        @endforeach
        <div class="clear"></div>
    </div>

    <div class="grid_8">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">last Minute</a></li>
                <li><a href="#tabs-2">hot Deals</a></li>
                <li><a href="#tabs-3">All-Inclusive</a></li>
            </ul>
            <div class="clear"></div>
            <div class="tab_cont" id="tabs-1"> <img src="{{asset('assets')}}/images/page1_img4.jpg" alt="">
                <div class="extra_wrapper">
                    <div class="text1">Rem psum dr sit amet. </div>
                    <p class="style1"><a class="col2" href="#">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
                    Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro. <a href="#" class="btn">Details</a>
                    <div class="clear "></div>
                </div>
                <div class="clear cl1"></div>
                <img src="{{asset('assets')}}/images/page1_img5.jpg" alt="">
                <div class="extra_wrapper">
                    <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                    Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
                    <div class="clear"></div>
                    <a href="#" class="btn bt1">Details</a>
                    <div class="clear "></div>
                </div>
            </div>
            <div class="tab_cont" id="tabs-2"> <img src="{{asset('assets')}}/images/page1_img4.jpg" alt="">
                <div class="extra_wrapper">
                    <div class="text1">Rem psum dr sit amet. </div>
                    <p class="style1">Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.</p>
                    Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro. <a href="#" class="btn">Details</a>
                    <div class="clear "></div>
                </div>
                <div class="clear cl1"></div>
                <img src="{{asset('assets')}}/images/page1_img5.jpg" alt="">
                <div class="extra_wrapper">
                    <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                    Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
                    <div class="clear"></div>
                    <a href="#" class="btn bt1">Details</a>
                    <div class="clear "></div>
                </div>
            </div>
            <div class="tab_cont" id="tabs-3"> <img src="{{asset('assets')}}/images/page1_img4.jpg" alt="">
                <div class="extra_wrapper">
                    <div class="text1">Rem psum dr sit amet. </div>
                    <p class="style1">Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.</p>
                    Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro. <a href="#" class="btn">Details</a>
                    <div class="clear "></div>
                </div>
                <div class="clear cl1"></div>
                <img src="{{asset('assets')}}/images/page1_img5.jpg" alt="">
                <div class="extra_wrapper">
                    <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                    Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
                    <div class="clear"></div>
                    <a href="#" class="btn bt1">Details</a>
                    <div class="clear "></div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid_4">
        <div class="newsletter_title">NewsLetter </div>
        <div class="n_container">
            <form id="newsletter" action="#">
                <div class="success">Your subscribe request has been sent!</div>
                <div class="text1">Sign up to receive our newsletters </div>
                <label class="email">
                    <input type="email" value="email address" >
                    <span class="error">*This is not a valid email address.</span> </label>
                <div class="clear"></div>
                <a href="#" class="" data-type="submit"></a>
            </form>
            <ul class="list">
                <li><a href="#">Fgo psu dr sit amek </a></li>
                <li><a href="#">Sem psum dr sit ametre </a></li>
                <li><a href="#">Rame sum dr sit ame </a></li>
                <li><a href="#">Bem psum dr sit ameteko </a></li>
                <li><a href="#">Nem dsum dr sit amewas </a></li>
                <li><a href="#">Vcem psum dr sit </a></li>
                <li><a href="#">Zdfem psum dr sittr amewe </a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    </div>
    </div>

    <div class="bottom_block">
        <div class="container_12">

            <div class="grid_2">
                <ul>
                    <li><a href="#">SOCIAL MEDIA</a></li>
                    @if($setting->facebook !=null)
                        <li><a href="{{$setting->facebook}}" target="_blank">FACEBOOK</a></li>
                    @endif

                    @if($setting->twitter !=null)
                        <li><a href="{{$setting->twitter}}" target="_blank">TWITTER</a></li>
                    @endif

                    @if($setting->youtube !=null)
                        <li><a href="{{$setting->youtube}}" target="_blank">YOUTUBE</a></li>
                    @endif

                </ul>
            </div>

            <div class="grid_2">
                <ul>
                    <li><a href="{{route('admin_login')}}">LOGIN</a></li>
                    <li><a href="#">Partners</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <ul>
                    <li><a href="{{route('aboutus')}}">ABOUT US</a></li>
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

@endsection
