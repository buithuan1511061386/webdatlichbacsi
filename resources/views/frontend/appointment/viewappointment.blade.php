@extends('frontend.master.index')
@section('title','About')
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
    <link href="{{asset('public/backend/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/select2/css/select2.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/select2/css/select2-bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/vendors/iCheck/css/all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/backend/css/pages/wizard.css')}}" type="text/css" rel="stylesheet">


@endsection
@section('body')

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <section class="content-header">
                <h1>Add New Appointment</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Appointment</a>
                    </li>
                    <li class="active">Add New Appointment</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i> Add New Admin
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- errors -->
                                <!--main content-->
                                <form id="commentForm" action="{{route('site.appointment.add')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                                    <!-- CSRF Token -->
									{{csrf_field()}}
									   <fieldset>
                                        <!-- Name input-->
                                                        <h1>Your's information</h1>

                                        <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Role *</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value= "Member" class="form-control" disabled="disabled" />
                                                    </div>
                                                </div>
                                       <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Name *</label>
                                                    <div class="col-sm-10">
                                                        <input id="name" type="text" placeholder="Name" class="form-control"
													value="@foreach($user as $item){{ $item->id == $data->customer_id ?"$item->name" : '' }}@endforeach" disabled="disabled" required />
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Email *</label>
                                                    <div class="col-sm-10">
                                                        <input id="email"  value="@foreach($user as $item){{ $item->id == $data->customer_id ?"$item->email" : '' }}@endforeach" disabled="disabled" type="text" class="form-control required email" />
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                                                    <div class="col-sm-10">
                                                        <input id="birthday" value="@foreach($user as $item){{ $item->id == $data->customer_id ?"$item->birthday" : '' }}@endforeach" disabled="disabled"type="text" class="form-control" data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd" />
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Phone *</label>
                                                    <div class="col-sm-10">
                                                        <input id="phone" value="@foreach($user as $item){{ $item->id == $data->customer_id ?"$item->phone" : '' }}@endforeach" disabled="disabled" type="text"  class="form-control" required />
                                                    </div>
                                                </div>
                                                <!--<div class="form-group">
                                                    <label for="pic" class="col-sm-2 control-label">Profile picture</label>
                                                    <div class="col-sm-10">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                                <img src="http://placehold.it/200x200" alt="profile pic">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                                            <div>
                                                                <span class="btn btn-default btn-file">
                                    <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input id="pic" name="image" type="file" class="form-control" />
                                                                </span>
                                                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label for="bio" class="col-sm-2 control-label">Content <small>(brief intro) *</small></label>
                                                    <div class="col-sm-10">
                                                        <textarea name="content" id="content" class="form-control resize_vertical" rows="4"></textarea>
                                                    </div>
                                                </div>-->
												<h1>Doctor's information</h1>

                                        <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Role *</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value= "Doctor" class="form-control" disabled="disabled" />
                                                    </div>
                                                </div>
                                       <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Name *</label>
                                                    <div class="col-sm-10">
                                                        <input id="name" type="text" placeholder="Name" class="form-control"
													value="@foreach($user as $item){{ $item->id == $data->doctor_id ?"$item->name" : '' }}@endforeach" disabled="disabled" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Email *</label>
                                                    <div class="col-sm-10">
                                                        <input id="email" value="@foreach($user as $item){{ $item->id == $data->doctor_id ?"$item->email" : '' }}@endforeach" disabled="disabled" type="text" class="form-control required email" />
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
                                                    <div class="col-sm-10">
                                                        <input id="birthday"  value="@foreach($user as $item){{ $item->id == $data->doctor_id ?"$item->birthday" : '' }}@endforeach" disabled="disabled"type="text" class="form-control" data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd" />
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Phone *</label>
                                                    <div class="col-sm-10">
                                                        <input id="phone"  value="@foreach($user as $item){{ $item->id == $data->doctor_id ?"$item->phone" : '' }}@endforeach" disabled="disabled" type="text"  class="form-control" required />
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Price *</label>
                                                    <div class="col-sm-10">
                                                        <input id="phone"  name="price" value="@foreach($user as $item){{ $item->id == $data->doctor_id ?"$item->price" : '' }}@endforeach" disabled="disabled" type="text"  class="form-control" required />
                                                    </div>
                                                </div>

												<div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Region </label>
                                                    <div class="col-sm-10">
                                                        <input id="phone"  value="<?php
												$result='';
												foreach($user as $item)
												if($item->id == $data->doctor_id)
												$result= $item->region_id;
												foreach($region as $i)
												if($i->id == $result)
												echo $i->name;
												?>" disabled="disabled" type="text"  class="form-control" required />
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Hospital </label>
                                                    <div class="col-sm-10">
                                                        <input id="phone" value="<?php
												$result='';
												foreach($user as $item)
												if($item->id == $data->doctor_id)
												$result= $item->hospital_id;
												foreach($hospital as $i)
												if($i->id == $result)
												echo $i->name;
												?>" disabled="disabled" type="text"  class="form-control" required />
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label for="phone" class="col-sm-2 control-label">Department </label>
                                                    <div class="col-sm-10">
                                                        <input id="phone"  value="<?php
												$result='';
												foreach($user as $item)
												if($item->id == $data->doctor_id)
												$result= $item->department_id;
												foreach($department as $i)
												if($i->id == $result)
												echo $i->name;
												?>" disabled="disabled" type="text"  class="form-control" required />
                                                    </div>
                                                </div>
												<h1>Appointment's information</h1>
									
                                       <div class="form-group">
                                                    <label for="name" class="col-sm-2 control-label">Date *</label>
                                                    <div class="col-sm-10">
                                                        <input id="name" type="text" placeholder="Name" class="form-control"
													value="{{$data->date}}" disabled="disabled" required />
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <label for="email" class="col-sm-2 control-label">Time *</label>
                                                    <div class="col-sm-10">
                                                        <input id="email" value="{{$data->time}}" disabled="disabled" type="text" class="form-control required email" />
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label for="bio" class="col-sm-2 control-label"> Note <small>(brief intro) *</small></label>
                                                    <div class="col-sm-10">
                                                        <textarea name="note" id="description" class="form-control resize_vertical" rows="4">{{$data->note}}</textarea>
                                                    </div>
                                                </div>
												



                                        <!-- Form actions -->
           

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row end-->
            </section>
        </aside>
		    <!-- global js -->
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="{{asset('public/backend/vendors/moment/js/moment.min.js')}}"></script>
    <script src="{{asset('public/backend/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/select2/js/select2.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/bootstrapwizard/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/vendors/iCheck/js/icheck.js')}}"></script>
    <script src="{{asset('public/backend/js/pages/adduser.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
    <script>
    $(document).ready(function() {

        $("#dob").datetimepicker({
            format: 'YYYY-MM-DD',
            widgetPositioning:{
                vertical:'bottom'
            },
            keepOpen:false,
            useCurrent: false,
            maxDate: new Date()
        });
    });
    </script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

<script>

     CKEDITOR.replace( 'note',{
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    }  );
</script>

@endsection
