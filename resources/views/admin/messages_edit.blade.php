@extends('layouts.admin')

@section('tittle','Message Edit')


@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>MESSAGE EDIT PAGE</h3>
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
                        <form id="demo-form2" data-parsley-validate="" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                <tr><th>id</th><td>{{$data->id}}</td></tr>
                                <tr><th>Name</th><td>{{$data->name}}</td></tr>
                                <tr><th>iPhoned</th><td>{{$data->email}}</td></tr>
                                <tr><th>Subject</th><td>{{$data->phone}}</td></tr>
                                <tr><th>Message</th><td>{{$data->message}}</td></tr>

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


