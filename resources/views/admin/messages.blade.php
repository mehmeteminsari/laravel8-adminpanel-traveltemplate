@extends('layouts.admin')

@section('tittle','CONTACT Messages LIST')


@section('content')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>CONTACT</h3>
                    @include('home.message')
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
                            <h2><a type="submit" href="{{route('admin_message')}}" class="btn btn-success">admin message</a></h2>



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
                                        <h2>MESSAGE TABLE <small></small></h2>
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
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Admin Note</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->name}}</td>
                                                    <td>{{$rs->email}}</td>
                                                    <td>{{$rs->phone}}</td>
                                                    <td>{{$rs->message}}</td>
                                                    <td>{{$rs->note}}</td>
                                                    <td>{{$rs->status}}</td>

                                                    <td style="vertical-align: middle; text-align: center">

                                                        <a href="{{route('admin_message_edit',['id'=>$rs->id])}}"
                                                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><i class="fa fa-edit" style="font-size: 25px"></i>Edit <span class="text-muted"></span></a>


                                                    </td>

                                                    <td>
                                                        <a href="{{route('admin_message_delete',['id' => $rs->id])}}"  onclick="return confirm('Are you sure?')"><i class="fa fa-trash"style="font-size: 25px"></i>Delete</a>

                                                    </td>


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


