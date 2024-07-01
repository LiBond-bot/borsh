<?php

/*
Template Name: Партнерам
*/

// Header
get_header();

?>

	<div class="dz-bnr-inr style-1 text-center bg-parallax">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Партнерам</h1>

				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Партнерам</li>
					</ul>
				</nav>
				
			</div>
		</div>
	</div>
	
	<section class="content-inner-1">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="title">О нашем производстве</h2>
				<p>Место, где готовят и собирают заказы</p>
			</div>
			<div>
				<p>Мы понимаем, что доверие к бренду формируется из прозрачности. Поэтому мы открыто демонстрируем вам процесс производства блюд, которые вы закупаете у нас.</p>
				<p>На кухне «БОРЩ» всегда кипит интенсивная деятельность: гудят вытяжки, трудятся повара, шуршат фирменные пакеты… А как иначе, если в течение дня мы должны приготовить и развести по точкам более 3000 блюд? </p>
				<p>Чтобы в срок предоставлять вам качественные продукты, которые вы сможете реализовать в своем магазине, на нашем предприятии: </p>
			</div>
			<div class="row mb-3 mt-5">
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/chef.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Работаем<br>каждый день</h5>
							<p>Насладитесь вкусным обедом в любой момент.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/delivery-man.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Собственный<br>штат курьеров</h5>
							<p>Оперативно и аккуратно доставляем заказы.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/ingredients.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Натуральные ингредиенты</h5>
							<p>Передаем пользу продуктов и сохраняем её в вашей тарелке.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 m-b30">
					<div class="icon-bx-wraper style-3">
						<div class="icon-bx">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/healthy-food.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="title">Разнообразное<br>меню</h5>
							<p>Более 300 блюд<br>в ассортименте.</p>
						</div>
					</div>
				</div>
			</div>
			<div>
				<p>Мы также придерживаемся ⁠индивидуального подхода к каждому партнеру, поэтому учитываем все пожелания и решаем вопросы максимально оперативно. </p>
				<p>Можете своими глазами посмотреть, как выглядит профессиональная кухня, где работает команда «БОРЩ».</p>
			</div>

			<? 
			
				$gallery = carbon_get_theme_option('staff_gallery'); 

				if($gallery){
					?>
						<div class="gallery__block mt-5" id="lightgallery">
							<div class="row">
								<?php
									foreach ($gallery as $img) {
										?>
											<div class="col-md-4 col-sm-6 col-12 mb-4">
												<a href="<?=wp_get_attachment_image_url($img, 'full');?>" data-src="<?=wp_get_attachment_image_url($img, 'full');?>" class="dz-media rounded-md lg-item gallery__img">
													<img src="<?=wp_get_attachment_image_url($img, 'large');?>"  alt="/" width="800" height="650">
												</a>
											</div>
										<?
									}
								?>
							</div>
						</div>
					<?
				}
			?>
		</div>
	</section>

	<section class="content-inner-4">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="title">Оставьте заявку на<br>бесплатную дегустацию блюд!</h2>
				<p class="about-p">Привезем сет выбранных или популярных позиций</p>
			</div>
			<div class="dz-form-card bg-primary" id="formPartners">
				<div class="dz-form-card__message">
					<div class="dz-form-card__message-text">
						<div>Спасибо, что выбрали нас!</div>
						<div>Наш менеджер свяжется с вами для подтверждения заказа!</div>
					</div>
				</div>
				<form class="dzForm dezPlaceAni">
					<div class="row">
						<div class="col-lg-5 col-md-12 d-flex align-items-center">
							<div class="input-group input-line">
								<input name="name" required type="text" class="form-control" placeholder="Контактное лицо">
							</div>
						</div>
						<div class="col-lg-5 col-md-12 d-flex align-items-center">
							<div class="input-group input-line">
								<input name="phone" required type="text" class="form-control" placeholder="+7 (___) ___-__-__">
							</div>
						</div>
						
						<div class="col-lg-2 col-12">
							<button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Отправить</span></button>	
						</div>

						<div class="mt-3" style="font-size:14px;">
							Нажимая кнопку <b>"Отправить"</b>, вы соглашаетесь с <b><a href="/privacy-policy/">Политикой конфиденциальности</a></b>
						</div>
					</div>
				</form>
				<input type="hidden" name="title" value="Дегустация блюд | Форма с страницы партнёрам">
			</div>
		</div>
	</section>

<?php get_footer(); ?>
		
	