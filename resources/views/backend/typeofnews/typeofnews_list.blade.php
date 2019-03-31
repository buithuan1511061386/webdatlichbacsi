@extends('backend.master.index')
@section('head')
    <meta charset="UTF-8">
    <title>Type of news </title>
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
    <!-- end of page level css -->
@endsection
@section('body')
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Type of news</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Type of news</a>
                    </li>
                    <li class="active">Type of news List</li>
                </ol>
            </section>
            <!-- Main content -->
             @if (session('status'))
                                        <div class="alert alert-success alert-dismissable margin5">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {{ session('status') }}
                                        </div>
            @endif
            <section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>Type of news List
                            </h4>
                        </div>

                        <div class="panel-body">
                            <table class="table table-bordered " id="table">
                                <thead>
                                    <tr class="filters">
                                        <th>ID</th>
                                        <th>Name</th>

                                        <th>Create At</th>
                                        <th>Update At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($data as $typeofnews)
                                    <tr>
                                        <td>{{$typeofnews->id}}</td>
                                        <td>{{$typeofnews->name}}</td>

                                        <td>{{$typeofnews->created_at}}</td>
                                        <td>{{$typeofnews->updated_at}}</td>
                                        <td>
                                           <a href="{{ route('admin.typeofnews.edit',$typeofnews->id)}}" class="btn btn-primary">Edit</a>


                                        </td>
                                        <td>
                                              <form action="{{ route('admin.typeofnews.destroy', $typeofnews->id)}}" method="post">
                                                 @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>

                                        </td>
                                    </tr>

                                        @endforeach

                                </tbody>
                            </table>
                            <!-- Modal for showing delete confirmation -->
                            <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="user_delete_confirm_title">
                                                Delete Region
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to delete this region? This operation is irreversible.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="deleted_users.html" class="btn btn-danger">Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row-->
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
        $('#table').dataTable();
    });
    </script>
    <!-- end of page level js -->
@endsection
