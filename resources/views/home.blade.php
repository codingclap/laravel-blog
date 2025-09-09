@extends('layouts.app')

@section('content')
    <!--====== Banner Area Start ======-->
	<section class="banner-section">
		<div class="banner-slider">
			<div class="sinlge-banner">
				<div class="banner-wrapper">
					<div class="banner-bg" style="background-image: url({{ asset('images/banner-1.jpg') }})"></div>
					<div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
						<h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
							<a href="#">
								The Olivier da Costa restaurant experience in Lisbon
							</a>
						</h3>
						<ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
							<li><a href="#">By - Zhon Smith</a></li>
							<li><a href="#">Travel,</a><a href="#">Design,</a><a href="#">Nature</a></li>
						</ul>
						<p data-animation="fadeInUp" data-delay="1s">
							When it comes to creating is a website for your busin an attractive design will only get you
							far. With people increasingly using their tablets and smartphones and shop online,...
						</p>
						<a href="blog-details.html" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
							Read More <i class="fas fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="sinlge-banner">
				<div class="banner-wrapper">
					<div class="banner-bg" style="background-image: url({{ asset('images/banner-2.jpg') }})"></div>
					<div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
						<h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
							<a href="#">
								The Olivier da Costa restaurant experience in Lisbon
							</a>
						</h3>
						<ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
							<li><a href="#">By - Zhon Smith</a></li>
							<li><a href="#">Travel,</a><a href="#">Design,</a><a href="#">Nature</a></li>
						</ul>
						<p data-animation="fadeInUp" data-delay="1s">
							When it comes to creating is a website for your busin an attractive design will only get you
							far. With people increasingly using their tablets and smartphones and shop online,...
						</p>
						<a href="blog-details.html" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
							Read More <i class="fas fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-nav"></div>
	</section>
	<!--====== Banner Area End ======-->

    <!--====== Post Area Start ======-->
	<section class="post-area no-sidebar" id="postWarpperLoaded">
		<div class="container-fluid">
			<div class="post-area-inner">
				<!-- Entry Post -->
				<div class="entry-posts clearfix masonary-posts row">
					<div class="col-xl-4 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
								<img src="{{ asset('images/blog-1.jpg') }}" alt="Image">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="blog-details.html">
										Best Wordpress Theme of 2018
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">18-04-21</a>
									</li>
									<li class="categories">
										<a href="#">Design,</a>
										<a href="#">Travel,</a>
										<a href="#">photography,</a>
										<a href="#">Nature</a>
									</li>
								</ul>
								<p>
									When it comes to creating is a website for your business, an attractive design
									will only get you far. With people increasingly using their tablets and
									smartphones and shop online,...
								</p>
								<a href="blog-details.html" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
								<img src="{{ asset('images/blog-2.jpg') }}" alt="Image">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="blog-details.html">
										Nature Photography Best Focus
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">18-04-21</a>
									</li>
									<li class="categories">
										<a href="#">Design,</a>
										<a href="#">Travel,</a>
										<a href="#">photography,</a>
										<a href="#">Nature</a>
									</li>
								</ul>
								<p>
									When it comes to creating is a website for your business, an attractive design
									will only get you far. With people increasingly using their tablets and
									smartphones and shop online,...
								</p>
								<a href="blog-details.html" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
								<img src="{{ asset('images/blog-3.jpg') }}" alt="Image">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="blog-details.html">
										Best Wordpress Theme of 2018
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">18-04-21</a>
									</li>
									<li class="categories">
										<a href="#">Design,</a>
										<a href="#">Travel,</a>
										<a href="#">photography,</a>
										<a href="#">Nature</a>
									</li>
								</ul>
								<p>
									When it comes to creating is a website for your business, an attractive design
									will only get you far. With people increasingly using their tablets and
									smartphones and shop online,...
								</p>
								<a href="blog-details.html" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
								<img src="{{ asset('images/blog-2.jpg') }}" alt="Image">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="blog-details.html">
										Tasty Burger Food Review
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">18-04-21</a>
									</li>
									<li class="categories">
										<a href="#">Design,</a>
										<a href="#">Travel,</a>
										<a href="#">photography,</a>
										<a href="#">Nature</a>
									</li>
								</ul>
								<p>
									When it comes to creating is a website for your business, an attractive design
									will only get you far. With people increasingly using their tablets and
									smartphones and shop online,...
								</p>
								<a href="blog-details.html" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
								<img src="{{ asset('images/blog-3.jpg') }}" alt="Image">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="blog-details.html">
										Tasty Burger Food Review
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">18-04-21</a>
									</li>
									<li class="categories">
										<a href="#">Design,</a>
										<a href="#">Travel,</a>
										<a href="#">photography,</a>
										<a href="#">Nature</a>
									</li>
								</ul>
								<p>
									When it comes to creating is a website for your business, an attractive design
									will only get you far. With people increasingly using their tablets and
									smartphones and shop online,...
								</p>
								<a href="blog-details.html" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-sm-6">
						<div class="entry-post">
							<div class="entry-thumbnail">
								<img src="{{ asset('images/blog-1.jpg') }}" alt="Image">
							</div>
							<div class="entry-content">
								<h4 class="title">
									<a href="blog-details.html">
										World Best Travel Place in 2020
									</a>
								</h4>
								<ul class="post-meta">
									<li class="date">
										<a href="#">18-04-21</a>
									</li>
									<li class="categories">
										<a href="#">Design,</a>
										<a href="#">Travel,</a>
										<a href="#">photography,</a>
										<a href="#">Nature</a>
									</li>
								</ul>
								<p>
									When it comes to creating is a website for your business, an attractive design
									will only get you far. With people increasingly using their tablets and
									smartphones and shop online,...
								</p>
								<a href="blog-details.html" class="read-more">
									Read More <i class="fas fa-long-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					 
					 
					 
					<div class="col-12">
						<div class="text-center">
							<a href="#" class="load-more-btn">Load More</a>
						</div>
					</div>
				</div>
			 
			</div>
		</div>
	</section>
	<!--====== Post Area End ======-->
@endsection