@extends('frontend.master.index')
@section('title','Departments')
@section('body')
		<!-- Page Banner -->
		<div class="page-banner departments-banner container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h3>Departments</h3>
				<p>Qualified Staff With Expertise in Services We Offer for more Resonable</p>
				<p>cost with love, Just explore about More!</p>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Departments</li>
				</ol>
			</div><!-- Container /- -->
			<!-- Shape -->
			<div class="banner-shape container-fluid no-padding">
				<div class="col-md-6 col-sm-6 col-xs-6 shape-left no-padding">
					<div class="left-shape-blue">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
								<polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
							</clipPath>
						</svg>
					</div>	
					<div class="left-shape">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
								<polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
							</clipPath>
						</svg>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 shape-right no-padding">
					<div class="right-shape-blue">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
								<polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
							</clipPath>
						</svg>
					</div>	
					<div class="right-shape">				
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
								<polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
							</clipPath>
						</svg>
					</div>
				</div>
			</div><!-- Shape -->
		</div><!-- Page Banner /- -->
		
		<!-- Message Borad -->
		<div id="message-borad" class="container-fluid no-padding message-borad">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Emargency Case -->
					<div class="col-md-6 col-sm-6 emargency-case">
						<div class="col-md-6 message-block no-left-padding">
							<h3>Emergency case</h3>
							<p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
							<a href="#">More Details<i class="fa fa-caret-right"></i></a>
						</div>
						<div class="col-md-6 message-block no-right-padding">
							<h3>New Registration</h3>
							<p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
							<a href="#">More Details<i class="fa fa-caret-right"></i></a>
						</div>
					</div><!-- Emargency Case /- -->
					<!-- Opening Hours -->
					<div class="col-md-6 col-sm-6 opening-hours">
						<div class="col-md-6 message-block no-padding">
							<h3>opening hours</h3>
							<ul>
								<li>Monday - Friday<span class="pull-right">8.00 – 18.00</span></li>
								<li>Saturday<span class="pull-right">8.00 – 16.00</span></li>
								<li>Sunday<span class="pull-right">8.00 – 13.00</span></li>
							</ul>
						</div>
						<div class="col-md-6 message-block">
							<h3>doctors Timetable</h3>
							<p>Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori las quos dolores et quas mole.</p>
							<a href="#">More Details<i class="fa fa-caret-right"></i></a>
						</div>
					</div><!-- Opening Hours /- -->
				</div>
			</div><!-- Container /- -->
		</div><!-- Message Borad /- -->
		
		<!-- What We Do Best -->
		<div id="what-we-do-best" class="container-fluid no-padding what-we-do-best">					
			<!-- What We Do Best Left -->
			<div class="what-we-do-left col-md-4 no-padding">
				<img src="{{asset('public/frontend/images/what-we-do-best.jpg')}}" alt="what-we-do-best">
			</div><!-- What We Do Best Left /- -->
			<!-- What We Do Best Right -->
			<div class="col-md-8 what-we-do-right no-padding">
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/pulmonary.png')}}" alt="pulmonary"/></i>
							<h5>Pulmonary</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/cardiology.png')}}" alt="Cardiology"/></i>
							<h5>Cardiology</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/traumatology.png')}}" alt="Traumatology"/></i>
							<h5>Traumatology</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/neurology.png')}}" alt="Neurology"/></i>
							<h5>Neurology</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding what-we-do-title">
					<div class="what-we-do-block">
						<img src="{{asset('public/frontend/images/what-we-do-best-block-title-bg.jpg')}}" alt="what-we-do-best-title"/>
						<div class="what-we-do-block-content">
							<h3>What we do best</h3>					
							<p>Dolor sit amet consecdi pisicing eliam sedo</p>
							<span><img src="{{asset('public/frontend/images/section-seprator.png')}}" alt="section-seprator"/></span>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/x-ray.png')}}" alt="X-ray"/></i>
							<h5>X-ray</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/nuclear-magnetic.png')}}" alt="Nuclear magnetic"/></i>
							<h5>Nuclear magnetic</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/diagnostic.png')}}" alt="Diagnostic"/></i>
							<h5>Diagnostic</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6 no-padding">
					<div class="what-we-do-block">					
						<img src="{{asset('public/frontend/images/what-we-do-best-block-bg.jpg')}}" alt="what-we-do-best"/>
						<div class="what-we-do-block-content">
							<i><img src="{{asset('public/frontend/images/blood-test.png')}}" alt="Blood test"/></i>
							<h5>Blood test</h5>
							<p>Nam libero tempore cumas soluta eligendi </p>
						</div>
					</div>
				</div>
			</div><!-- What We Do Best Right /- -->
		</div><!-- What We Do Best /- -->
		
		<!-- Service Section -->
		<div id="service-section" class="container-fluid no-padding service-section">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Service -->
					<div class="col-md-8 col-sm-12 col-xs-12 service">
						<div class="section-header">
							<h3>Maxi Health benefits</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,  totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="service-block">
									<div class="service-block-icon">
										<i><img src="{{asset('public/frontend/images/ambulance.png')}}" alt="ambulance"/></i>
										<i><img src="{{asset('public/frontend/images/ambulance-white.png')}}" alt="ambulance-white"/></i>
									</div>
									<div class="service-block-content">
										<h3>Emergency services</h3>
										<p>Dolor sit amet consecdi pisicing eliam sed do eiusmod tempornu.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="service-block">
									<div class="service-block-icon">
										<i><img src="{{asset('public/frontend/images/heart-ic.png')}}" alt="heart-ic"/></i>
										<i><img src="{{asset('public/frontend/images/heart-ic-white.png')}}" alt="heart-ic-white"/></i>
									</div>
									<div class="service-block-content">
										<h3>Qualified Doctors</h3>
										<p>Dolor sit amet consecdi pisicing eliam sed do eiusmod tempornu.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="service-block">
									<div class="service-block-icon">
										<i><img src="{{asset('public/frontend/images/phone.png')}}" alt="phone"/></i>
										<i><img src="{{asset('public/frontend/images/phone-white.png')}}" alt="phone-white"/></i>
									</div>
									<div class="service-block-content">
										<h3>24/7 support</h3>
										<p>Dolor sit amet consecdi pisicing eliam sed do eiusmod tempornu.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="service-block">
									<div class="service-block-icon">
										<i><img src="{{asset('public/frontend/images/appoinment-latter.png')}}" alt="appoinment-latter"/></i>
										<i><img src="{{asset('public/frontend/images/appoinment-latter-white.png')}}" alt="appoinment-latter-white"/></i>
									</div>
									<div class="service-block-content">
										<h3>online appointment</h3>
										<p>Dolor sit amet consecdi pisicing eliam sed do eiusmod tempornu.</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- Service /- -->				
					<div class="col-md-4 col-sm-12 col-xs-12">
						<!-- Appointment Form -->
						<form class="appoinment-form">
							<h3><img src="{{asset('public/frontend/images/appoinment.png')}}" alt="appoinment"/>Appointment form</h3>
							<div class="form-group col-md-12 no-padding">							
								<input type="text" id="your-name" class="form-control" placeholder="Your Name">
							</div>					
							<div class="form-group col-md-12 no-padding">							
								<input type="email" id="email" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group input-group col-md-12 no-padding">
								<div class="col-md-7 no-padding">
									<div class="col-md-6 col-sm-4 col-xs-4 no-left-padding">
										<select class="form-control">
											<option>Day</option>
											<option>Sunday</option>
											<option>Monday</option>
										</select>
									</div>
									<div class="col-md-6 col-sm-4 col-xs-4 no-left-padding">
										<select class="form-control">
											<option>Time</option>
											<option>AM</option>
											<option>PM</option>
										</select>
									</div>
								</div>
								<div class="col-md-5 col-sm-4 col-xs-4 no-padding">
									<select class="form-control">
										<option>Doctor Name</option>
										<option>Mr.XYZ</option>
										<option>Mr.ABC</option>
									</select>
								</div>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">							
								<textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
							</div>
							<div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
								<input type="checkbox"><span>Send Email Notification</span>							
								<button type="submit" id="btn_submit" class="btn-submit pull-right">
								<img src="{{asset('public/frontend/images/heart-sm.png')}}" alt="heart-sm">Submit</button>
							</div>
						</form><!-- Appointment Form /- -->
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Service Section /- -->
@endsection