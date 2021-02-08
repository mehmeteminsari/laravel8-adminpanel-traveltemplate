@php
    use App\Http\Controllers\HomeController;
    $parentCategories = HomeController::categorylist()

@endphp
<header style="width:100%;" class="d-flex justify-content-center">
    <div class="row pt-5">
        <div class="pure-css-nav">
            <nav>
                <ul>
                    <li class="pr-5"><a href="{{route('home')}}">Home</a></li>
                    <li>
                        <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li><a href="{{route('references')}}">REFERENCES</a></li>
                    <li><a href="{{route('home')}}"><img src="{{asset('assets')}}/images/logo.png" alt=""></a></li>
                    <li><a href="">TURLAR</a>

                        <ul>
                            @foreach($parentCategories as $rs)
                                <li>
                                    <a href="">{{$rs->title}}</a>
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                </li>
                            @endforeach
                        </ul>


                    </li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>

                    <li>
                        <form action="{{route('getproduct')}}" method="post" class="d-flex">
                            @csrf
                            @livewire('search')
                            {{--                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        @section('footerjs')
                        @livewireScripts
                        @endsection
                    </li>



                    <li>
                        @auth
                            <a href="#">{{Auth::user()->name}}</a>
                        @endauth
                        @guest
                                <a href="/login">LOGIN</a>
                            @endguest


                            <ul>
                                <li><a href="logout">logout</a></li>
                                <li><a href="{{route('userprofile')}}">Your Profile</a></li>
                            </ul>

                    </li>

                </ul>
            </nav>
        </div>

    </div>
</header>
