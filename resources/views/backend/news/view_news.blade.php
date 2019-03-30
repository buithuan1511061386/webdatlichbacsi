@extends('backend.master.index')
@section('head')
    <meta charset="UTF-8">
    <title>View News</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('public/backend/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('public/backend/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend/vendors/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend/css/pages/user_profile.css')}}" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
@endsection
@section('body')
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>News</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li class="active">News Detail</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">
                                    <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i> User Profile</a>
                            </li>
               
                        </ul>
                        <div class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">

                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail img-file">
                                                                <img src="{{asset('public/'."$data->image")}}" width="200" class="img-responsive" height="150" alt="riot">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail img-max">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped" id="users">
                                                                <tr>
                                                                    <td>Title</td>
                                                                    <td>
                                                                        {{ $data->title }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Link</td>
                                                                    <td>
                                                                         {{ $data->link }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Creator</td>
                                                                    <td>
                                                                        {{ $data->creator }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Meta desc</td>
                                                                    <td>
                                                                        {{ $data->meta_desc }}
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Meta key</td>
                                                                    <td>
                                                                        {{ $data->meta_key }}
                                                                    </td>
                                                                </tr>
																         <tr>
                                                                    <td>Create at</td>
                                                                    <td>
                                                                        {{ $data->created_at }}
                                                                    </td>
                                                                </tr>
																         <tr>
                                                                    <td>Update at</td>
                                                                    <td>
                                                                        {{ $data->updated_at }}
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Type of news</td>
                                                                    <td>@foreach($typeofnews as $item)
                                                                        {{ $item->id == $data->typeofnews_id ?
                                                                            "$item->name" : '' }}
                                                                         @endforeach
                                                                    </td>
                                                                </tr>
                                                                

                                                                
                                                                <tr>
                                                                    <td>Intro</td>
                                                                    <td>
                                                                          @if ($data->intro=="")
                                                                            {{ "Không có"}}
                                                                            @else
                                                                            {{$data->intro}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Content</td>
                                                                    <td>
                                                                          @if ($data->content=="")
                                                                            {{ "Không có"}}
                                                                            @else
                                                                            {{$data->content}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                 

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
                    </div>
                </div>
            </section>
            <!-- content -->
        </aside>
       @endsection
@section('bottom')
    <!-- global js -->
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('public/backend/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/jquery-mockjax/js/jquery.mockjax.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/x-editable/js/bootstrap-editable.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/pages/user_profile.js')}}" type="text/javascript"></script>
@endsection
