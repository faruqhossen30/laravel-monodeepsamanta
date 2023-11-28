@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <!-- Portfolio -->
			<section class="section-wrap">
				<div class="container-fluid container-semi-fluid">

					<!-- Filter -->
					<div class="masonry-filter text-center">
						<a href="#" class="filter active" data-filter="*">All</a>
						<a href="#" class="filter" data-filter=".residential">Residential</a>
						<a href="#" class="filter" data-filter=".commercial">Commercial</a>
						<a href="#" class="filter" data-filter=".interior">Interior</a>
						<a href="#" class="filter" data-filter=".landscape">Landscape</a>
					</div> <!-- end filter -->

					<div class="row masonry-grid">

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/1.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Keangnam Grand Hall</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/2.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Green House</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/3.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Contemporary Villa</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/4.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Keangnam Grand Hall</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/5.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Business Office</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/6.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Horizon Urban</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/7.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Center for Climate Change</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/8.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Northern Slope Sanctuary</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/9.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Australian Museum</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/10.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Texas Children's Hospital</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/11.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Modern Living Room</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/12.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Swift Style Flat</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger residential">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/13.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Bulgarian Getaway</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger commercial">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/14.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Living Room Interior</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger interior">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/15.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">Norwegian Cold Proof Home</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

						<div class="masonry-item col-lg-3 project hover-trigger landscape">
							<div class="project__container">
								<div class="project__img-holder">
									<a href="portfolio-single.html">
										<img src="img/portfolio/16.jpg" alt="" class="project__img">
										<div class="hover-overlay">
											<div class="project__description">
												<h3 class="project__title">East Bethesda Market</h3>
												<span class="project__date">2018</span>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div> <!-- end project -->

					</div>
				</div>
			</section> <!-- end portfolio -->
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/settings.css')}}">
@endpush

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('js/rev-slider.js')}}"></script>
@endpush
