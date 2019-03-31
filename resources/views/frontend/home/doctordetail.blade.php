@extends('frontend.master.index') @section('title','About') @section('update')
<link href="{{asset('public/frontend/single/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('public/frontend/single/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('public/frontend/single/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bonfire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
</script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{asset('public/frontend/single/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/single/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<link rel="stylesheet" href="{{asset('public/frontend/single/css/etalage.css')}}">
<script src="{{asset('public/frontend/single/js/jquery.etalage.min.js')}}"></script>
<script>
    jQuery(document).ready(function($) {

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
            click_callback: function(image_anchor, instance_id) {
                alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
            }
        });

    });
</script>
<script>
    $(document).ready(function(c) {
        $('.alert-close').on('click', function(c) {
            $('.message').fadeOut('slow', function(c) {
                $('.message').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.alert-close1').on('click', function(c) {
            $('.message1').fadeOut('slow', function(c) {
                $('.message1').remove();
            });
        });
    });
</script>
<<style type="text/css">
    .nav > li { float: left; padding: 0; }

    </style>

    @endsection @section('body')

    <body>
        <!--header-->

        <!---->
         <div class="container">
            <div class="single">
                <div class="col-md-9 top-in-single">
                    <div class="col-md-5 single-top">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image img-responsive" src="{{asset('public/'."$data->image")}}" alt="" >
                                    <img class="etalage_source_image img-responsive" src="{{asset('public/'."$data->image")}}" alt="" >
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div class="col-md-7 single-top-in">
                        <div class="single-para">
                            <h4> {{ $data->name }}</h4>
                            <h3>@foreach($region as $item)
                            {{ $item->id == $data->region_id ?
                                "$item->name" : '' }}
                             @endforeach</h3>
                            <h3>@foreach($hospital as $item)
                                {{ $item->id == $data->hospital_id ?
                                    "$item->name" : '' }}
                                 @endforeach</h3>
                            <h3>@foreach($department as $item)
                                {{ $item->id == $data->department_id ?
                                    "$item->name" : '' }}
                                 @endforeach</h3>
                            <div class="para-grid">
                                <span class="add-to">@php echo number_format($data->price); @endphp đ</span>

                                <div class="clearfix"></div>
                            </div>

                            @if ($data->description=="") {{ "Không có"}} @else {!!$data->description!!} @endif

                        </div>
                    </div>

                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
		@if(Auth::guard('web')->check())

 <div class="container">
            @if ($data->content=="") {{ "Không có"}} @else {!!$data->content!!} @endif @foreach($doctortime as $item)
            <br/>
            <div class="col-md-12">
                Ngày {{date('Y-m-d', strtotime("$item->date"))}}
            </div>
            <br/> {{-- @php $begin =new DateTime($item->time_start); $end = new DateTime($item->time_end); $interval = DateInterval::createFromDateString('30 min'); $times = new DatePeriod($begin, $interval, $end); @endphp --}}
            <?php foreach ($times as $time){ ?>
                @if(date('Y-m-d', strtotime("$time")) == date('Y-m-d', strtotime("$item->date")))
                <form id="commentForm" action="{{route('site.appointment.create')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <!-- CSRF Token -->
                    {{csrf_field()}}

                    <!-- Name input-->
                    <div class="form-group" hidden>
                        <label class="col-md-3 control-label" for="name">Customer id</label>
                        <div class="col-md-9">
                            <input id="name" name="customer_id" type="text" value="{{Auth::user()->id}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label class="col-md-3 control-label" for="name">Doctor id</label>
                        <div class="col-md-9">
                            <input id="name" name="doctor_id" type="text" value=" {{ $data->id }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label class="col-md-3 control-label" for="name">Date</label>
                        <div class="col-md-9">
                            <input id="name" name="date" type="text" value="{{$item->date}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label class="col-md-3 control-label" for="name">Time</label>
                        <div class="col-md-9">
                            <input id="name" name="time" type="text" value="{{date('H:i',strtotime(" $time "))}}" class="form-control">
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group col-md-2" style="display: inline">
                        <div class="col-md-3">
                            <button type="submit" name="btnAddAppointment" class="btn btn-responsive btn-primary btn-sm">{{date('H:i',strtotime("$time"))}}</button>

                        </div>
                    </div>

                </form>
                @endif
                <?php }?>

                    <br/> @endforeach
        </div>
		@else

		<button class="btn btn-primary"><a href="{{url('site/login')}}">Login to see</a></button>


		@endif
				<!-- Container -->
		<div class="container">
			<!-- Contact Us -->
			<div class="contact-us">
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-map-marker"></i>
						<span>Address</span>

						<p>{{ $data->address }}</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-mobile"></i>
						<span>Phone</span>
						<p>{{ $data->phone }}</p>

					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-envelope"></i>
						<span>Email</span>
						<p><a title="Mailto" href="mailto:$data->email">{{ $data->email }}</a></p>

					</div>
				</div>
			</div><!-- Contact Us /- -->
		</div><!-- Container /- -->

		<!-- Map Section -->
	<iframe src="https://maps.google.com/maps?q={{ $data->latitude }},{{ $data->longitude }}&hl=es;z=14&amp;output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- Team Section -->
        <div id="team-section" class="container-fluid no-paddding team-section">
            <div class="container">
                <div class="section-header">
                    <h3>meet our doctors</h3>
                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                </div>
                <div class="team-carousel">
                    @foreach($user as $item)
                    <div class="col-md-12 team-type">
                        <img src="{{asset('public/'."$item->image")}}" alt="doctor-1"/>
                        <div class="member-content">
                            <div class="member-name">
                                <h6>{{$item->name}}</h6>
                                <p>@foreach($region as $i) {{ $i->id == $item->region_id ? "$i->name" : '' }} @endforeach
                                </p>
                                <p>@foreach($hospital as $value) {{ $value->id == $item->hospital_id ? "$value->name" : '' }} @endforeach
                                </p>
                                <p>@foreach($department as $value) {{ $value->id == $item->department_id ? "$value->name" : '' }} @endforeach
                                </p>
                            </div>
                            <div class="member-contact">
                                <a title="Phone" href="#"><img src="{{asset('public/frontend/images/ftr-phone.png')}}" alt="Phone" /></a>
                                <a title="Mail" href="#"><img src="{{asset('public/frontend/images/ftr-email.png')}}" alt="Email" /></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--<div class="col-md-12 team-type">
                        <img src="{{asset('public/frontend/images/doctor-2.jpg')}}" alt="doctor-2"/>
                        <div class="member-content">
                            <div class="member-name">
                                <h6>Dr.Adaline Becka</h6>
                                <p>Dental Specialist</p>
                            </div>
                            <div class="member-contact">
                                <a title="Phone" href="#"><img src="{{asset('public/frontend/images/ftr-phone.png')}}" alt="Phone" /></a>
                                <a title="Mail" href="#"><img src="{{asset('public/frontend/images/ftr-email.png')}}" alt="Email" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 team-type">
                        <img src="{{asset('public/frontend/images/doctor-3.jpg')}}" alt="doctor-3"/>
                        <div class="member-content">
                            <div class="member-name">
                                <h6>Dr.Adaline Becka</h6>
                                <p>Dental Specialist</p>
                            </div>
                            <div class="member-contact">
                                <a title="Phone" href="#"><img src="{{asset('public/frontend/images/ftr-phone.png')}}" alt="Phone" /></a>
                                <a title="Mail" href="#"><img src="{{asset('public/frontend/images/ftr-email.png')}}" alt="Email" /></a>
                            </div>
                        </div>
                    </div>-->
                </div>
                <a title="View All Doctors" href="#">View All Doctors<i class="fa fa-plus"></i></a>
            </div>
        </div>

        <!-- Team Section -->
        <!---->

        <!---->

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        </div>
    </body>
    @endsection


