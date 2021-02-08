@extends('layouts.admin')

@section('tittle','Review Edit')


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>REVIEW EDIT PAGE</h3>
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
                            <h2>@include('home.message')</h2>
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
                        <form id="demo-form2" data-parsley-validate="" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                <tr><th>Id</th><td>{{$data->id}}</td></tr>
                                <tr><th>Name</th><td>{{$data->user->name}}</td></tr>
                                <tr><th>Product</th><td>{{$data->product->title}}</td></tr>
                                <tr><th>Subject</th><td>{{$data->subject}}</td></tr>
                                <tr><th>Review</th><td>{{$data->review}}</td></tr>
                                <tr><th>Rate</th><td>{{$data->rate}}</td></tr>
                                <tr><th>Ip</th><td>{{$data->IP}}</td></tr>
                                <tr><th>Created Date</th><td>{{$data->created_at}}</td></tr>
                                <tr><th>Updated Date</th><td>{{$data->updated_at}}</td></tr>
                                <tr><th>Status</th><td>

                                        <select name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>

                                    </td></tr>

                                <tr>
                                    <th>Admin Note</th><td><textarea class="form-control" type="textarea" name="note" placeholder="NOTUNUZ"></textarea></td>
                                </tr>

                                <tr><th></th><td><button type="submit" class="btn btn-success">UPDATE SETTING</button></td></tr>

                                </tr>
                                </thead>
                                <tbody>




                                </tbody>
                            </table>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->
@endsection


