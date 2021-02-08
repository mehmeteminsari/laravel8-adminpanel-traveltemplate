@extends('layouts.admin')

@section('tittle','category page')


@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>PRODUCT</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><a type="submit" href="{{route('admin_product_add')}}" class="btn btn-success">ADD PRODUCT</a></h2>



                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-13 col-sm-13">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>PRODUCT TABLE <small></small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <table class="table table-bordered">
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
                                                        <a href="{{route('admin_image_add',['product_id'=>$rs->id])}}"
                                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            <img src="{{asset('assets/images')}}/indir.png" height="30">
                                                        </a>
                                                    </td>
                                                    <td>{{$rs->cagetory_id}}</td>
                                                    <td>{{$rs->city}}</td>
                                                    <td>{{$rs->country}}</td>
                                                    <td>{{$rs->user_id}}</td>
                                                    <td>{{$rs->Status}}</td>

                                                    <td><a href="{{route('admin_product_edit',['id' => $rs->id])}}" >edit</a></td>
                                                    <td><a href="{{route('admin_product_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')">delete</a></td>


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
        </div>
    </div>
    <!-- /page content -->


@endsection


