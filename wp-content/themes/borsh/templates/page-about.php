<?php

/*
Template Name: О компании
*/

// Header
get_header();

?>

	<div class="dz-bnr-inr style-1 text-center bg-parallax">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>О компании</h1>

				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">О компании</li>
					</ul>
				</nav>
				
			</div>
		</div>
	</div>
	
	<!-- Visit Restaurant -->
	<section class="content-inner pb-0">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="title">We Invite you to Visit Our Restaurant</h2>
				<p class="about-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="about-media dz-media rounded-md">
						<img src="<?=get_template_directory_uri()?>/assets/images/patterns/pic11.jpg" alt="/">
						<a class="video video-btn popup-youtube" href="https://www.youtube.com/watch?v=XJb1G9iRoL4">
							<i class="fa-solid fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Visit Restaurant -->

	<!-- Service Section -->
	<section class="content-inner">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="title">What We Do</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div class="icon-cell">
								<i class="flaticon-vegetable"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title"><a href="service-detail.html">Fresh Products</a></h5>
							<p>Lorem Ipsum is simply dummy text of the printing and </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div class="icon-cell">
								<i class="flaticon-chef-hat"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title"><a href="service-detail.html">Skilled Chefs</a></h5>
							<p>Lorem Ipsum is simply dummy text of the printing and </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div class="icon-cell">
								<i class="flaticon-cocktail"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title"><a href="service-detail.html">Best Bar</a></h5>
							<p>Lorem Ipsum is simply dummy text of the printing and </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div class="icon-cell">
								<i class="flaticon-cuisine"></i>
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title"><a href="service-detail.html">Vegan Cuisine</a></h5>
							<p>Lorem Ipsum is simply dummy text of the printing and </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section -->

<?php get_footer(); ?>
		
	