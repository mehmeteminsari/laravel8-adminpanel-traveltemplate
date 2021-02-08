@extends('layouts.admin')

@section('title','EDIT SETTING')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>SETTING</h3>
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

            <!-- page navbar -->
            <div class="x_panel">
                <form id="demo-form2" data-parsley-validate="" action="{{route('admin_setting_update')}}" method="post" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="x_title">
                        <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
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

                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">GENERAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp" role="tab" aria-controls="smtp" aria-selected="false">SMTP EMAIL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">SOCIAL MEDIA</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="aboutus-tab" data-toggle="tab" href="#aboutus" role="tab" aria-controls="aboutus" aria-selected="false">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CONTACT PAGE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="references-tab" data-toggle="tab" href="#references" role="tab" aria-controls="references" aria-selected="false">REFEFENCES</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">ID<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">TITTLE<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="title" value="{{$data->title}}"  required="required" class="form-control">
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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">COMPANY<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="company" value="{{$data->company}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">ADRESS<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="address" value="{{$data->address}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">PHONE<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="phone" value="{{$data->phone}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">FAX<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="fax" value="{{$data->fax}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">EMAIL<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="email" value="{{$data->email}}" required="required" class="form-control">
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

                            </div>

                            <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">SMTPSERVER<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="smtpserver" value="{{$data->smtpserver}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">SMTPEMAIL<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="smtpemail" value="{{$data->smtpemail}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">SMTPPASSWORD<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="password" id="last-name" name="smtppassword" value="{{$data->smtppassword}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">SMTPPORT<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="number" id="last-name" name="smtpport" value="{{$data->smtpport}}" required="required" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">FACEBOOK<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="facebook" value="{{$data->facebook}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">TWITTER<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="twitter" value="{{$data->twitter}}" required="required" class="form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">YOUTUBE<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="last-name" name="youtube" value="{{$data->youtube}}" required="required" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">

                                <div class="item form-group">
                                    <label class="col-form-label col-sm-3 label-align" for="last-name">ABOUTUS<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea id="xaboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="item form-group">
                                    <label class="col-form-label col-sm-3 label-align" for="last-name">CONTACT<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <textarea id="xcontact" name="contact">{{$data->contact}}</textarea>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="references-tab">
                                <div class="item form-group">
                                    <label class="col-form-label col-sm-3 label-align" for="last-name">REFERENCES<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea id="xreferences" name="references">{{$data->references}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-success">UPDATE SETTING</button>
                            </div>
                        </div>
                    </div>


                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#xaboutus' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                        ClassicEditor
                            .create( document.querySelector( '#xcontact' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                        ClassicEditor
                            .create( document.querySelector( '#xreferences' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>



                </form>
            </div>
        </div>
    </div>

@endsection


