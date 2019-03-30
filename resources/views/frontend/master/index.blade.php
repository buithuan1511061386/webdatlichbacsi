<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Maxi Health')</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('public/frontend/images//favicon.ico')}}" />

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images//apple-touch-icon-114x114-precomposed.png')}}">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images//apple-touch-icon-72x72-precomposed.png')}}">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images//apple-touch-icon-57x57-precomposed.png')}}">

    <!-- Library - Loader CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/loader/loaders.min.css')}}">

    <!-- Library - Google Font Familys -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/bootstrap/bootstrap.min.css')}}">

    <!-- Font Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/fonts/elegant-icons.css')}}">

    <!-- Library - OWL Carousel V.2.0 beta -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/owl-carousel/owl.theme.css')}}">

    <!-- Library - Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/animate/animate.min.css')}}">

    <!-- Library - Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/libraries/magnific-popup/magnific-popup.css')}}">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/navigation-menu.css')}}">

    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
    <![endif]-->

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/shortcodes.css')}}">



@yield('update','')

    <!--[if lt IE 9]>
        <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->

    <a id="top"></a>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Header -->
        <header class="header-main">
            <!-- Top Header -->
            <div class="top-header container-fluid no-padding">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>We believe every interaction with our patients is an opportunity!</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                            <a href="#" title="Book Appointment"><span>+</span>Book Appointment</a>
                        </div>
                    </div>
                </div><!-- container /- -->
            </div><!-- Top Header /- -->
            <!-- Logo Block -->
            <div class="middle-header container-fluid no-padding">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo-block pull-left">
                            <a href="#" title="Logo"><img src="{{asset('public/frontend/images/logo.png')}}" alt="Logo" /></a>
                        </div>
                        <div class="col-md-9 text-right pull-right">
                            <div class="location">
                                <h3><img src="{{asset('public/frontend/images/location-ic.png')}}" alt="Location" /> Our Location</h3>
                                <p>E44 - Web Corner, Melbourne - 18</p>
                            </div>
                            <div class="phone">
                                <h3><img src="{{asset('public/frontend/images/phone-ic.png')}}" alt="phone" /> (+1)800 433 633</h3>
                                <p>Call Us Now- 24/7 Customer Support</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Container -->
            </div><!-- Logo Block /- -->
            <!-- Navigation -->
            <nav class="navbar ow-navigation">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">

                                    <li class="dropdown {{ Request::is('/site/home/') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('site/home/')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                        <li id="bacsigannhat"><a href="{{url('site/doctorlist/')}}">Doctor Near</a></li>
                                        <li id="bacsigannhat"><a href="{{url('site/storelist/')}}">Pharmastore Near</a></li>

                                    </ul>
                                </li>
                                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{url('site/home/about')}}">About</a></li>

                                <!--<li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{url('services')}}">Services</a></li>-->

                                <!--<li class="{{ Request::is('team') ? 'active' : '' }}"><a href="{{url('team')}}">Our Team</a></li>-->
                                <!--<li class="{{ Request::is('departments') ? 'active' : '' }}"><a href="{{url('departments')}}">departments</a></li>-->
                                <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{url('site/home/gallery')}}">Gallery </a></li>
                                <!--<li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('blog')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                        <li class=""><a href="{{url('blog-post')}}">Blog Post</a></li>
                                    </ul>
                                </li>-->
                                <li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('blog')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Region</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                     @foreach($region as $item)
                                        <li class=""><a href="{{ route('site.home.regionlist',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('blog')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Hospital</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                     @foreach($hospital as $item)
                                        <li class=""><a href="{{ route('site.home.hospitallist',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('site/home/department')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Department</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                     @foreach($department as $item)
                                        <li class=""><a href="{{ route('site.home.departmentlist',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('site/home/department')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">News</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                     @foreach($typeofnews as $item)
                                        <li class=""><a href="{{ route('site.home.newlist',$item->id)}}">{{$item->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                 @if (Auth::guard('web')->check())

                                 <li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('site/home/department')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Member</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                    <li><a href="{{ route('site.user.show',Auth::user()->id) }}">My Profile</a></li>
                                     <li><a href="{{ route('site.user.edit',Auth::user()->id) }}">Update Profile</a></li>
                                    <li><a href="{{ route('site.appointment.index',Auth::user()->id)}}">Calendar</a></li>
                                    <li><a href="{{url('site/logout')}}">Logout</a></li>
                                    </ul>
                                </li>

                                 @else
                                 <li class="dropdown {{ Request::is('blog') ? 'active' : '' }} {{ Request::is('blog-post') ? 'active' : '' }} ">
                                    <a href="{{url('site/home/department')}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Member</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                    <li class=""><a href="{{ url("site/user/3/add") }}">Register</a></li>
                                    <li class=""><a href="{{url('site/login')}}">Login</a></li>
                                    <li class=""><a href="{{url('site/user/forgetpassword')}}">Forget password</a></li>
                                    </ul>
                                </li>
                                 @endif
                                <!--<li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        @yield('body')


        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bf4042340105007f378cfe0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        <footer class="footer-main container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <!-- Contact Detail -->
                <div class="contact-details">
                    <div class="col-md-4 col-sm-4 address-box detail-box">
                        <i><img src="{{asset('public/frontend/images/ftr-location.png')}}" alt="Loactaion" /></i>
                        <h4>hospital address</h4>
                        <p>E44, Design Street, Web Corner</p>
                        <p>Melbourne - 005</p>
                    </div>
                    <div class="col-md-4 col-sm-4 phone-box detail-box">
                        <i><img src="{{asset('public/frontend/images/ftr-phone.png')}}" alt="Phone" /></i>
                        <h4>EMERGENCY ( 24X7 )</h4>
                        <p>Mobile: (+1) 800 433 633</p>
                        <p>Toll Free : (+1) 800 123 456</p>
                    </div>
                    <div class="col-md-4 col-sm-4 mail-box detail-box">
                        <i><img src="{{asset('public/frontend/images/ftr-email.png')}}" alt="Email" /></i>
                        <h4>hospital address</h4>
                        <p><a href="mailto:info@maxihealth.com">info@maxihealth.com</a></p>
                        <p><a href="mailto:support@maxihealth.com">support@maxihealth.com</a></p>
                    </div>
                </diV><!-- Contact Detail /- -->

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <aside class="widget widget-about">
                            <h3><img src="{{asset('public/frontend/images/logo-ftr.png')}}" alt="Logo" /></h3>
                            <p>Aqui blanditiis praesentium voluptatum delenitia atque corrupti quos dolores.</p>
                            <div class="time-schedule">
                                <p>Monday - Friday <span>8.00 - 18.00</span></p>
                                <p>Saturday <span>8.00 - 18.00</span></p>
                                <p>Sunday <span>8.00 - 13.00</span></p>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <aside class="widget widget-links">
                            <h3 class="widget-title">Our Services</h3>
                            <ul>
                                <li><a href="#" title="Births">Births</a></li>
                                <li><a href="#" title="Dental">Dental</a></li>
                                <li><a href="#" title="Pulmonary">Pulmonary</a></li>
                                <li><a href="#" title="Nuclear magnetic">Nuclear magnetic</a></li>
                                <li><a href="#" title="Cardiology">Cardiology</a></li>
                                <li><a href="#" title="Pregnancy">Pregnancy</a></li>
                                <li><a href="#" title="Neurology">Neurology</a></li>
                                <li><a href="#" title="For disabled">For disabled</a></li>
                                <li><a href="#" title="Traumatology">Traumatology</a></li>
                                <li><a href="#" title="X-ray">X-ray</a></li>
                                <li><a href="#" title="Neurology">Neurology</a></li>
                                <li><a href="#" title="Prostheses">Prosthese</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <aside class="widget widget-newsletter">
                            <h3 class="widget-title">Newsletter</h3>
                            <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium quas molestias except.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-send-o"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="social">
                                <h6>Stay Connected</h6>
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div><!-- Container /- -->
            <!-- Bottom Footer -->
            <div class="container-fluid no-padding bottom-footer">
                <p>&copy; 2018 Maxi Health. All Rights Reserved.</p>
            </div><!-- Bottom Footer /- -->
        </footer>

    </div><!-- Main Container -->

    <!-- JQuery v1.11.3 -->
    <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>

    <!-- Library - Modernizer -->
    <script src="{{asset('public/frontend/libraries/modernizr/modernizr.js')}}"></script>

    <!-- Library - Bootstrap v3.3.5 -->
    <script src="{{asset('public/frontend/libraries/bootstrap/bootstrap.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->

    <!-- jQuery Easing v1.3 -->
    <script src="{{asset('public/frontend/js/jquery.easing.min.js')}}"></script>

    <!-- Library - jQuery.appear -->
    <script src="{{asset('public/frontend/libraries/appear/jquery.appear.js')}}"></script>

    <!-- Library - OWL Carousel V.2.0 beta -->
    <script src="{{asset('public/frontend/libraries/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- jQuery For Number Counter -->
    <script src="{{asset('public/frontend/libraries/number/jquery.animateNumber.min.js')}}"></script>

    <!-- Library - Isotope Portfolio Filter -->
    <script src="{{asset('public/frontend/libraries/isotope/isotope.pkgd.min.js')}}"></script>

    <!-- Library - Magnific Popup - v1.0.0 -->
    <script src="{{asset('public/frontend/libraries/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Library - Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <!-- Library - Theme JS -->
    <script src="{{asset('public/frontend/js/functions.js')}}"></script>
{{-- 	<script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log('Bower not support');
            }
        }

        function showPosition(position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
        }
        window.onload = getLocation;
    </script> --}}
    {{-- <script>
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    console.log('Bower not support');
                }
            }

            function showPosition(position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                ajaxUrl(lat,lng);
            }
            window.onload = getLocation()
            // $('#bacsigannhat').click(function() {
            //     getLocation()
            // });
    </script>

    <script>
        var array = [];
        function ajaxUrl(lat,lng)
        {
            $.ajax({
                url: "/webdatlichbacsi/site/finddoctor",
                type: "GET",
                dataType: 'json',
                success: function(response){
                    response.forEach(function(element){
                        var obj = {
                            people:element,
                            dist:distance(lat,lng,element.latitude,element.longitude)
                        }
                        array.push(obj);
                        // array.push(distance(lat,lng,element.latitude,element.longitude));
                        // array.push(element);
                    });
                    array.sort(function(a,b){return a.dist - b.dist});

                }
            });
        }
        // function ajaxGet(array = [])
        // {
        //     $.ajax({
        //         url: "/webdatlichbacsi/site/finddoctor/doctorlist",
        //         type: "POST",
        //         data:{
        //             array:array,
        //             _token:'{{csrf_token()}}'
        //         }
        //     });
        // }
        function distance(lat1, lon1, lat2, lon2, unit) {
            if ((lat1 == lat2) && (lon1 == lon2)) {
                return 0;
            }
            else {
                var radlat1 = Math.PI * lat1/180;
                var radlat2 = Math.PI * lat2/180;
                var theta = lon1-lon2;
                var radtheta = Math.PI * theta/180;
                var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                if (dist > 1) {
                    dist = 1;
                }
                dist = Math.acos(dist);
                dist = dist * 180/Math.PI;
                dist = dist * 60 * 1.1515;
                if (unit=="K") { dist = dist * 1.609344 }
                if (unit=="N") { dist = dist * 0.8684 }
                return dist;
            }
        }
    </script> --}}
</body>
</html>
