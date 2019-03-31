@extends('backend.master.index')
@section('head')
    <meta charset="UTF-8">
    <title>Deleted users | Josh Admin Template</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{asset('public/backend/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
    <!-- end page css -->
@endsection
@section('body')

        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Deleted users</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Users</a>
                    </li>
                    <li class="active">Deleted users</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff" data-hc="#ffffff"></i> Deleted Users List
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr class="filters">
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User E-mail</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Adele</td>
                                            <td>Becker</td>
                                            <td>otis98@hotmail.com</td>
                                            <td>2 weeks ago</td>
                                            <td>
                                                <a href=""><i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Adan</td>
                                            <td>Schmeler</td>
                                            <td>arnoldo19@gmail.com</td>
                                            <td>2 weeks ago</td>
                                            <td>
                                                <a href=""><i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Abbey</td>
                                            <td>Conn</td>
                                            <td>lehner.rhianna@christiansenwill.info</td>
                                            <td>2 weeks ago</td>
                                            <td>
                                                <a href=""><i class="livicon" data-name="user-flag" data-c="#01BC8C" data-hc="#01BC8C" data-size="18" title="restore"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
@endsection
@section('bottom')
    <!-- global js -->
    <script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script type="text/javascript" src="{{asset('public/backend/vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
    </script>
    <!-- end of page level js -->
@endsection
