<!DOCTYPE html>
<html>

<head>
    <title>Member Login | </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{asset('public/backend/css/pages/login2.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/vendors/iCheck/css/minimal/blue.css')}}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- styles of the page ends-->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Sign In</h3>
                    </div>
                    <div class="panel-body">

                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>

                                    </div>
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" id="email" required>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" class="minimal-blue"> Remember Me
                                    </label>
                                </div>

                                 <button id="login" class="btn btn-lg btn-primary btn-block">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">Sign In</span>
                                                        </button>
                            </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <!--<script src="{{asset('public/backend/js/app.js')}}" type="text/javascript"></script>-->
    <!-- end of global js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- begining of page level js-->
    <script src="{{asset('public/backend/js/TweenLite.min.js')}}"></script>
    <script src="{{asset('public/backend/vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/js/pages/login2.js')}}" type="text/javascript"></script>
    <!-- end of page level js-->
            <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function ajaxUrl(email,password)
            {
                $.ajax({
                    url: "/webdatlichbacsi/site/login",
                    type: "POST",
                    dataType: 'json',
                    data:{
                        email: email,
                        password: password
                    },
                    success: function(response){
                        alert(response.message);
                        location.reload();
                    },
                    error:function(error){
                        alert(error.responseJSON.message);
                    }
                });
            }
            $(document).ready(function(){
                $('#login').click(function() {
                    var email = $("#email").val();
                    var password = $("#password").val();
                    ajaxUrl(email,password);
                })
            });
        </script>
</body>

</html>
