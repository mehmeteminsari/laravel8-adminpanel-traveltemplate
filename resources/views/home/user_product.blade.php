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




                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>PRODUCT TABLE-<a class="btn btn-dark " href="{{route('user_product_add')}}" role="button">ADD PRODUCT</a> <small></small></h2>

                                        <div class="clearfix"></div>
                                    </div>


                                        <table class="table table-dark">
                                            <thead>
                                            <tr>
                                                <th>#id</th>
                                                <th>title</th>
                                                <th>keywords</th>
                                                <th>description</th>
                                                <th>image</th>
                                                <th>image gallery</th>
                                                <th>cagetory_id</th>
                                                <th>city</th>
                                                <th>country</th>
                                                <th>user_id</th>
                                                <th>Status</th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                    <td>{{$rs->keywords}}</td>
                                                    <td>{{$rs->description}}</td>

                                                    <td>
                                                        @if ($rs->image)
                                                            <img src="{{Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30" alt="">
                                                        @endif
                                                    </td>
                                                    <td style="vertical-align: middle; text-align: center">
                                                        <a href="{{route('user_image_add',['product_id'=>$rs->id])}}"
                                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            <img src="{{asset('assets/images')}}/indir.png" height="30">
                                                        </a>
                                                    </td>
                                                    <td>{{$rs->cagetory_id}}</td>
                                                    <td>{{$rs->city}}</td>
                                                    <td>{{$rs->country}}</td>
                                                    <td>{{$rs->user_id}}</td>
                                                    <td>{{$rs->Status}}</td>

                                                    <td><a href="{{route('user_product_edit',['id' => $rs->id])}}" >edit</a></td>
                                                    <td><a href="{{route('user_product_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')">delete</a></td>


                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>





                </div>


            </div>
        </div>
    </div>

@endsection

