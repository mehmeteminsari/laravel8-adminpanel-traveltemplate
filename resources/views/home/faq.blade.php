@extends('layouts.home')

@section('tittle','FAQ')



@section('content')

        <div class="content ">
            <div class="container_12">
                <div class="row">

                    <div class="list-group">
                        @foreach($datalist as $rs)
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Question:{{$rs->question }}</h5>
                                <small>Time:{{$rs->created_at}}</small>
                            </div>
                            <p class="mb-1">Answer:{!! $rs->answer !!}</small>
                        </a>
                        @endforeach
                    </div>








                    <div class="col-md-10">


                    </div>


                </div>
            </div>
        </div>

@endsection

