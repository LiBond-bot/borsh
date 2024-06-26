<?php

/*
Template Name: Контакты
*/

// Header
get_header();

?>

	<div class="dz-bnr-inr style-1 text-center bg-parallax">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Контакты</h1>

				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Контакты</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
	
	<section class="section-wrapper-8 content-inner-1">
		<div class="container">
			<div class="row inner-section-wrapper align-items-center">

				<?
					if(carbon_get_theme_option('site_adress')) {
						?>
							<div class="col-lg-3 col-sm-6">
								<div class="icon-bx-wraper style-5 hover-aware box-hover">
									<div class="icon-bx"> 
										<div class="icon-cell">
											<i class="flaticon-placeholder"></i>
										</div>
									</div>
									<div class="icon-content">
										<h5 class="title">Адрес</h5>
										<p><?=carbon_get_theme_option('site_adress')?></p>
										<div class="effect bg-primary"></div>
									</div>
								</div>
							</div>
						<?
					}
				?>

				<?
					if(carbon_get_theme_option('site_phone') || carbon_get_theme_option('site_phone_2')) {
						?>
							<div class="col-lg-3 col-sm-6">
								<div class="icon-bx-wraper style-5 hover-aware box-hover active">
									<div class="icon-bx"> 
										<div class="icon-cell">
											<i class="flaticon-telephone"></i>
										</div>
									</div>
									<div class="icon-content">
										<h5 class="title">Телефон</h5>
										<p>
											<a href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><?=carbon_get_theme_option('site_phone')?></a><br>
											<a href="tel:<?=carbon_get_theme_option('site_phone_digits_2')?>"><?=carbon_get_theme_option('site_phone_2')?></a>
										</p>
										<div class="effect bg-primary"></div>
									</div>
								</div>
							</div>
						<?
					}
				?>

				<?
					if(carbon_get_theme_option('site_email')) {
						?>
							<div class="col-lg-3 col-sm-6">
								<div class="icon-bx-wraper style-5 hover-aware box-hover">
									<div class="icon-bx "> 
										<div class="icon-cell">
											<i class="flaticon-email-1"></i>
										</div>
									</div>
									<div class="icon-content">
										<h5 class="title">Email</h5>
										<p><a href="mailto:<?=carbon_get_theme_option('site_email')?>"><?=carbon_get_theme_option('site_email')?></a></p>
										<div class="effect bg-primary"></div>
									</div>
								</div>
							</div>
						<?
					}
				?>

				<?
					if(carbon_get_theme_option('site_whatsapp') || carbon_get_theme_option('site_telegram')) {
						?>
							<div class="col-lg-3 col-sm-6">
								<div class="icon-bx-wraper style-5 hover-aware box-hover">
									<div class="icon-bx "> 
										<div class="icon-cell">
											<i class="flaticon-chat-bubble"></i>
										</div>
									</div>
									<div class="icon-content">
										<h5 class="title">Мессенджеры</h5>
										<p>
											<a href="https://t.me/<?=carbon_get_theme_option('site_telegram')?>">Telegram канал</a><br>
											<a href="https://api.whatsapp.com/send?phone=<?=carbon_get_theme_option( 'site_whatsapp' )?>">Whatsapp</a><br>
										</p>
										<div class="effect bg-primary"></div>
									</div>
								</div>
							</div>
						<?
					}
				?>

				
			</div>
			<div class="contacts__map">
				<? get_template_part('include/contacts') ?>
			</div>
		</div>
	</section>

			
<?php get_footer(); ?>	
		
	