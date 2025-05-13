@extends('siteView.app')

@section('title', 'Blog')

@section('content')

<!-- Breadcrumbs -->
<!-- Breadcrumbs -->
        <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Blog Single</h2>
							<ul class="bread-list">
								<li><a href="{{url('')}}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Blog Single</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
         <!-- Single News -->
		  
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
						@foreach($posts as $post)
						<a href="{{route('blogD.show', $post->id)}}">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="{{ asset('images/' . $post->image) }}" alt="L'mage de article">
									</div>
									<!-- News Title -->
									<h1 class="news-title"><a href="{{route('blogD.show', $post->id)}}">{{ $post->titre }}</a></h1>
									<!-- Meta -->
									<!-- <div class="meta">
										<div class="meta-left">
											<span class="author"><a href="#"><img src="fdmf.mastagate.com/img/author1.jpg" alt="#">Naimur Rahman</a></span>
											<span class="date"><i class="fa fa-clock-o"></i>03 Feb 2019</span>
										</div>
										<div class="meta-right">
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
											<span class="views"><i class="fa fa-eye"></i>33K Views</span>
										</div>
									</div> -->
									<!-- News Text -->
									<div class="news-text">
										<p>{{ Str::limit($post->contenu, 100, '...') }}</p>
										<!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commod</p> -->
										<!-- <div class="image-gallery">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="single-image">
														<img src="fdmf.mastagate.com/img/blog2.jpg" alt="#">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="single-image">
														<img src="fdmf.mastagate.com/img/blog3.jpg" alt="#">
													</div>
												</div>
											</div>
										</div> -->
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam.</p>
										<blockquote class="overlay">
											<p>Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales</p>					
										</blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse porttitor nunc a sodales tempor. Mauris sed felis maximus, interdum metus vel, tincidunt diam. Nam ac risus vitae sem vehicula egestas. Sed velit nulla, viverra non commodo et, sodales id dui.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis ultricies tortor, nec sollicitudin lorem sagittis vitae. Curabitur rhoncus commodo rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam nec lacus pulvinar, laoreet dolor quis, pellentesque ante. Cras nulla orci, pharetra at dictum consequat, pretium pretium nulla. Suspendisse</p> -->
									</div>
									<div class="blog-bottom">
										<!-- Social Share -->
										<!-- <ul class="social-share">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul> -->
										<!-- Next Prev -->
										<!-- <ul class="prev-next">
											<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
											<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul> -->
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
						</a>
						@endforeach
							<div class="col-12">
								<!-- <div class="blog-comments">
									<h2>All Comments</h2>
									<div class="comments-body"> -->
										<!-- Single Comments -->
										<!-- <div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="fdmf.mastagate.com/img/author1.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Afsana Mimi</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div> -->		
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<!-- <div class="single-comments left">
											<div class="main">
												<div class="head">
													<img src="fdmf.mastagate.com/img/author2.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Naimur Rahman</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div> -->		
										<!--/ End Single Comments -->
										<!-- Single Comments -->
										<!-- <div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="fdmf.mastagate.com/img/author3.jpg" alt="#"/>
												</div>
												<div class="body">
													<h4>Suriya Molharta</h4>
													<div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
													<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div> -->		
										<!--/ End Single Comments -->											
									<!-- </div>
								</div> -->
							</div>
							<div class="col-12">
								<!-- <div class="comments-form">
									<h2>Leave Comments</h2> -->
									<!-- Contact Form -->
									<!-- <form class="form" method="post" action="mail/mail.php">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-user"></i>
													<input type="text" name="first-name" placeholder="First name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="text" name="last-name" placeholder="Last name" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="email" name="email" placeholder="Your Email" required="required">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group message">
													<i class="fa fa-pencil"></i>
													<textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group button">	
													<button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
												</div>
											</div>
										</div>
									</form> -->
									<!--/ End Contact Form -->
								<!-- </div> -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<!-- <div class="single-widget search"> -->
								<!-- <div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div> -->
							<!-- </div> -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!-- <div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									<li><a href="#">Men's Apparel</a></li>
									<li><a href="#">Women's Apparel</a></li>
									<li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li>
								</ul>
							</div> -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title"> Articles recent</h3>
								<!-- Single Post -->
								 @foreach($recentPosts as $recentPost)
								<a href="{{route('blogD.show', $recentPost->id)}}"> 
								<div class="single-post">
									<div class="image">
										<img src="{{ asset('images/' . $recentPost->image) }}" alt="#">
									</div>
									<div class="content">
										<h5><a href="{{route('blogD.show', $recentPost->id)}}">{{ $recentPost->titre }}.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $recentPost->created_at->format('d/m/Y') }}</li>
										</ul>
									</div>
								</div>
								</a>
								@endforeach
								<!-- End Single Post -->
								<!-- Single Post -->
								<!-- <div class="single-post">
									<div class="image">
										<img src="fdmf.mastagate.com/img/blog-sidebar2.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top five way for solving teeth problems.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
										</ul>
									</div>
								</div> -->
								<!-- End Single Post -->
								<!-- Single Post -->
								<!-- <div class="single-post">
									<div class="image">
										<img src="fdmf.mastagate.com/img/blog-sidebar3.jpg" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">We provide highly business soliutions.</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
										</ul>
									</div>
								</div> -->
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!-- <div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>	
							</div> -->
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
@endsection