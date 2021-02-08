@extends('layouts.home')

@section('tittle','USERPROFILE')



@section('content')

        <div class="content ">
            <div class="container_12">
                <div class="row">
                    @include('home.usermenu')
                    <div class="col-md-10">

                        @include('profile.show')

                    </div>


                </div>
            </div>
        </div>

@endsection

