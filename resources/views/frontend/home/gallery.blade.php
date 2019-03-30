@extends('frontend.master.index')
@section('title','Gallery')
@section('body')
		<!-- Page Banner -->
		<div class="page-banner gallery-banner container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h3>gallery</h3>
				<p>These Happy Days are yours and mine Happy Days! The movie star </p>
				<p>the professor and Mary Ann here on Gilligans Isle.</p>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">gallery</li>
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
		
		<!-- Portfolio Section -->
		<div class="portfolio-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<!-- Portfolio Filters --> 
					<ul id="filters" class="portfolio-categories col-md-12 col-sm-12 col-xs-12 no-padding">
						<li><a id="all" href="#" data-filter="*" class="active">all</a></li>	
						<li><a href="#" data-filter=".facilities">Facilities</a></li>
						<li><a href="#" data-filter=".patients">patients</a></li>
						<li><a href="#" data-filter=".equipments">equipments</a></li>
						<li><a href="#" data-filter=".office">office</a></li>
					</ul><!-- / Portfolio Filters -->
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div id="portfolio" class="">
							<div class="portfolio-item facilities col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-1.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-1.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>facilities</h4>
								</div>
							</div>
							<div class="portfolio-item patients office col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-2.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-2.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>patients</h4>
								</div>
							</div>
							<div class="portfolio-item equipments col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-3.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-3.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>equipments</h4>
								</div>
							</div>
							<div class="portfolio-item facilities office col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-4.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-4.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>facilities</h4>
								</div>
							</div>
							<div class="portfolio-item patients col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-5.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-5.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>patients</h4>
								</div>
							</div>
							<div class="portfolio-item equipments office col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-6.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-6.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>equipments</h4>
								</div>
							</div>
							<div class="portfolio-item facilities col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-7.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-7.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>facilities</h4>
								</div>
							</div>
							<div class="portfolio-item patients col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-8.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-8.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>patients</h4>
								</div>
							</div>
							<div class="portfolio-item equipments office col-md-4 col-sm-6">
								<img src="{{asset('public/frontend/images/portfolio-9.jpg')}}" alt="Portfolio" />
								<a href="{{asset('public/frontend/images/portfolio-9.jpg')}}" title=""><img src="{{asset('public/frontend/images/plus.png')}}" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">
									<h3>MRI scan Machines</h3>
									<h4>equipments</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Pagination -->
				<nav class="ow-pagination">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&lt;</span>
							</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>							
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&gt;</span>
							</a>
						</li>
					</ul>
				</nav><!-- Pagination /- -->
			</div>
			<div class="section-padding"></div>
		</div><!-- Portfolio Section /- -->
@endsection