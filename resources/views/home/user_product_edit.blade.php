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
                    <form id="demo-form2" data-parsley-validate="" action="{{route('user_product_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">PARENT<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">

                                <select class="select2_group form-control" name="category_id">

                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif   > {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">TITTLE<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="title"  required="required" class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">KEYWORDS<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="keywords" value="{{$data->keywords}}" required="required" class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">DESCRIPTION<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="description" value="{{$data->description}}" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">IMAGE<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" id="last-name" name="image"  required="required" class="form-control">
                                @if ($rs->image)
                                    <img src="{{Illuminate\Support\Facades\Storage::url($rs->image)}}" height="30" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">CATEGORY_ID<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" id="last-name" name="category_id" value="{{$data->category_id}}" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">CITY<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="city" value="{{$data->city}}" required="required" class="form-control">
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">COUNTRY<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="country" value="{{$data->country}}" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">detail<span class="required">*</span></label>
                            <div class="col-md-12 col-sm-12 ">
                                <textarea id="detail" name="detail"></textarea>
                                <script>
                                    CKEDITOR.replace('detail');
                                </script>
                            </div>
                        </div>


                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">USER_ID<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" id="last-name" name="user_id" value="{{$data->user_id}}" required="required" class="form-control">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">STATUS<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="select2_group form-control" name="status">
                                    <option selected="selected">True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-success">EDIT product</button>
                            </div>
                        </div>

                    </form>




                </div>


            </div>
        </div>
    </div>

@endsection

