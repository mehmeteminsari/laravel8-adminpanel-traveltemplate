@extends('layouts.home')

@section('tittle','USERPROFILE')

@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

@endsection


@section('content')

    <div class="content ">
        <div class="container_12">
            <div class="row">
                @include('home.usermenu')
                <div class="col-md-10">
                    @include('home.message')
                    <table class="table table-dark table-borderless">
                        <tr>
                            <th>ID</th>
                            <th>PRODUCT</th>
                            <th>SUBJECT</th>
                            <th>REVIEW</th>
                            <th>RATE</th>
                            <th>STATUS</th>
                            <th>DATE</th>
                            <th>DELETE</th>
                        </tr>


                        @foreach($datalist as $rs)

                            <tr>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('product',['id'=>$rs->product->id,'city'=>$rs->product->title])}}"target="_blank">{{$rs->product->title}}</a></td>
                                <td>{{$rs->subjet}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">delete</a></td>
                            </tr>

                        @endforeach




                    </table>




                </div>


            </div>
        </div>
    </div>

@endsection

