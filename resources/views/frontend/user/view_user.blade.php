@extends('frontend.master.index')
@section('title','View')
@section('update')
    <meta charset="UTF-8">
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
                <h1>User Profile</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">User</a>
                    </li>
                    <li class="active">User Profile</li>
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
                            <li>
                                <a href="#tab2" data-toggle="tab">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Change Password</a>
                            </li>
                            <li>
                                <a href="user_profile.html">
                                    <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Advanced User Profile</a>
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
                                                                <img src="{{asset('public/'."$data->image")}}" width="200" class="img-responsive" height="150" alt="riot" id="">
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
                                                                    <td>Name</td>
                                                                    <td>
                                                                        {{ $data->name }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>
                                                                         {{ $data->email }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone Number</td>
                                                                    <td>
                                                                        {{ $data->phone }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Birthday</td>
                                                                    <td>
                                                                        {{ $data->birthday }}
                                                                    </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        {{ $data->address }}
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Region</td>
                                                                    <td>@foreach($region as $item)
                                                                        {{ $item->id == $data->region_id ?
                                                                            "$item->name" : '' }}
                                                                         @endforeach
                                                                    </td>
                                                                </tr>
                                                                @if($data->user_level_id!="2")
                                                                {{""}}

                                                                @else
                                                                <tr>
                                                                    <td>Hospital</td>
                                                                    <td>@foreach($hospital as $item)
                                                                        {{ $item->id == $data->hospital_id ?
                                                                            "$item->name" : '' }}
                                                                         @endforeach
                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                @if($data->user_level_id!="2")
                                                                {{""}}

                                                                @else
                                                                <tr>
                                                                    <td>Department</td>
                                                                    <td>@foreach($department as $item)
                                                                        {{ $item->id == $data->department_id ?
                                                                            "$item->name" : '' }}
                                                                         @endforeach
                                                                    </td>
                                                                </tr>

                                                                @endif

                                                                <tr>
                                                                    <td>Sex</td>
                                                                    <td>
                                                                        @if ($data->sex==1)
                                                                            {{ "Nam"}}
                                                                            @elseif($data->sex==2)
                                                                            {{"Nữ"}}
                                                                            @else
                                                                            {{"Khác"}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Verification</td>
                                                                    <td>
                                                                        @if ($data->verification==1)
                                                                            {{ "Đã xác thực"}}

                                                                            @else
                                                                            {{"Chưa xác thực"}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Description</td>
                                                                    <td>
                                                                          @if ($data->description=="")
                                                                            {{ "Không có"}}
                                                                            @else
                                                                            {!!$data->description!!}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Content</td>
                                                                    <td>
                                                                          @if ($data->content=="")
                                                                            {{ "Không có"}}
                                                                            @else
                                                                            {!!$data->content!!}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                 @if($data->user_level_id!="2")
                                                                {{""}}

                                                                @else
                                                                <tr>
                                                                    <td>Price</td>
                                                                    <td>

                                                                            {{$data->price}}

                                                                    </td>
                                                                </tr>
                                                                @endif
                                                                  <tr>
                                                                    <td>Level</td>
                                                                    <td>
                                                                          @if ($data->user_level_id==1)
                                                                            {{ "Admin"}}
                                                                            @elseif($data->user_level_id==2)
                                                                            {{"Doctor"}}
                                                                            @else
                                                                            {{"User"}}
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
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12 pd-top">
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="inputpassword" class="col-md-3 control-label">
                                                        Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password" id="inputpassword" placeholder="Password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputnumber" class="col-md-3 control-label">
                                                        Confirm Password
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                            </span>
                                                            <input type="password" id="inputnumber" placeholder="Confirm Password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    &nbsp;
                                                    <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        </aside>
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

