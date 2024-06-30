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
				<h2 class="title"><span class="text-primary">«БОРЩ»</span> — это не просто название одного из горячих супов…</h2>
				<p class="about-p">… это целая история!</p>
			</div>
			<div class="row">
				<div class="col-12">
					<p>Шесть лет назад наша команда начала с производства и доставки ПП-блюд. Сейчас, помимо первоначального направления, мы запустили отдельное — это питательные и разнообразные обеды. То, без чего невозможно представить сбалансированный рацион!</p>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white pt-4">
		<div class="container">
			<p>Стать одним из лидеров поставок готовых блюд в Ростове и области у нас получилось благодаря высокому сервису:	</p>
			<div class="row icon-wrapper2 gx-lg-5 mt-5">
				<div class="col-lg-4 col-md-6 m-b30" data-wow-delay="0.2s">
					<div class="icon-bx-wraper style-2 style-about">
						<div class="icon-bx radius">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/chef.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="dz-title"><a href="javascript:void(0);">Ежедневное обслуживание</a></h5>
							<p>Чтобы вы могли насладиться вкусным обедом в перерыве или дома</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 m-b30" data-wow-delay="0.2s">
					<div class="icon-bx-wraper style-2 style-about">
						<div class="icon-bx radius">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/ingredients.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="dz-title"><a href="javascript:void(0);">Ставка на натуральные ингредиенты</a></h5>
							<p>Чтобы сохранить полезные свойства продуктов в вашей тарелке</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 m-b30" data-wow-delay="0.4s">
					<div class="icon-bx-wraper style-2 style-about">
						<div class="icon-bx radius">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/healthy-food.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="dz-title"><a href="javascript:void(0);">Обширное меню</a></h5>
							<p>В которое входит 300 позиций. Постоянно пополняем новинками!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 m-b30 mt-lg-4 mt-0" data-wow-delay="0.4s">
					<div class="icon-bx-wraper style-2 style-about">
						<div class="icon-bx radius">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/employees.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="dz-title"><a href="javascript:void(0);">Опытные профессионалы</a></h5>
							<p>Со стажем +10 лет в сфере общепита</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 m-b30 mt-lg-4 mt-0" data-wow-delay="0.6s">
					<div class="icon-bx-wraper style-2 style-about">
						<div class="icon-bx radius">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/delivery-man.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="dz-title"><a href="javascript:void(0);">Собственный штат курьеров</a></h5>
							<p>Которые быстро и аккуратно доставляют заказы</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 m-b30 mt-lg-4 mt-0" data-wow-delay="0.6s">
					<div class="icon-bx-wraper style-2 style-about">
						<div class="icon-bx radius">
							<div>
								<img src="<?=get_template_directory_uri()?>/assets/images/icons/best-price.png" alt="">
							</div>
						</div>
						<div class="icon-content">
							<h5 class="dz-title"><a href="javascript:void(0);">Оптимальные цены</a></h5>
							<p>Оптимальные цены на наши предложения</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<? $gallery = carbon_get_theme_option('job_gallery'); 

		if($gallery){
			?>
				<section class="gallery content-inner-2 section-wrapper-2">
					<div class="container">

						<div class="section-head text-center">
							<h2 class="title">Наши сотрудники</h2>
							<p class="about-p">Люди, причастные к нашему проекту</p>
						</div>
						
						<div class="gallery__block" id="lightgallery">
							<div class="row">
								<?php
									foreach ($gallery as $img) {
										?>
											<div class="col-md-4 col-sm-6 col-12 mb-4">
												<a href="<?=wp_get_attachment_image_url($img, 'full');?>" data-src="<?=wp_get_attachment_image_url($img, 'full');?>" class="dz-media rounded-md lg-item gallery__img">
													<img src="<?=wp_get_attachment_image_url($img, 'large');?>" width="800" height="650">
												</a>
											</div>
										<?
									}
								?>
							</div>
						</div>
					</div>
				</section>
			<?
		}

	?>




	<?
		$certificates = carbon_get_theme_option('certificates'); 
		if($certificates){
			?>
				 <section class="certificates content-inner-1 section-wrapper-2 right">
					<div class="container">
						<div class="section-head text-center">
							<h2 class="title">Сертификаты качества</h2>
							<p class="about-p">Официальное подтверждение деятельности</p>
						</div>
						<? get_template_part('include/main_page/certificates') ?>
					</div>
				</section>
			<?
		}
	?>

	<section class="pb-5">
		<div class="container">
			<div class="section-head text-center">
				<h2 class="title"><span class="text-primary">Реквизиты </span>организации</h2>
				<p class="about-p">Для официальных обращений</p>
			</div>
			<div class="row align-items-center">
				<div class="col-md-6 col-12">
					<p><b>ИП</b> Кухарев Анатолий Владимирович</p>
					<p><b>Юр. адрес:</b> Краснодарский край, Крыловский районн, станица Кугоейская, переулок Гагарина, 40</p>
					<p><b>Фактический адрес:</b> г. Ростов-на-Дону, переулок Жлобинский, д. 21</p>
					<p><b>ИНН:</b> 233803223847</p>
					<p><b>ОГРНИП:</b> 317237500436828</p>
				</div>
				<div class="col-md-6 col-12">
					<div class="contacts__map">
						<div class="map-iframe style-1">
							<?=carbon_get_theme_option( 'site_map' )?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content-inner-4">
		<div class="container">
			<div class="dz-form-card bg-primary">
				
				<div class="section-head">
					<h2 class="title">Закажите сейчас свой вкусный комплекс!</h2>
					<p>Оставьте заявку на обратный звонок, менеджер поможет вам с выбором</p>
				</div>

				<form class="dzForm dezPlaceAni" method="POST" action="script/contact_smtp.php">
					<div class="dzFormMsg"></div>
					<div class="row">
						<div class="col-lg-5 col-md-12 d-flex align-items-center">
							<div class="input-group input-line">
								<input name="dzEmail" required type="text" class="form-control" placeholder="Контактное лицо">
							</div>
						</div>
						<div class="col-lg-5 col-md-12 d-flex align-items-center">
							<div class="input-group input-line">
								<input name="dzEmail" required type="text" class="form-control" placeholder="+7 (___) ___-__-__">
							</div>
						</div>
						
						<div class="col-lg-2 col-12">
							<button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Отправить</span></button>	
						</div>

						<div class="mt-3" style="font-size:14px;">
							Нажимая кнопку <b>"Отправить"</b>, вы соглашаетесь с <b><a href="/privacy-policy/">Политикой конфеденциальности</a></b>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
		
	